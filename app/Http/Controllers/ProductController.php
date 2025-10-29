<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('categories')->get();
        return view('content.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('content.pages.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'description' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'categories' => 'required|array|min:1',
            'categories.*' => 'exists:product_categories,id',
        ]);

        // Handle file upload
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('products', 'public');
            $data['image'] = $imagePath;
        }

        // Create product
        $product = Product::create($data);

        // Attach categories
        $product->categories()->attach($data['categories']);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display category page for specific category routes
     */
    public function showCategory(Request $request)
    {
        $path = $request->path();
        $slug = str_replace('products/', '', $path);
        
        // Define category mappings with 'title' field
        $categoryMappings = [
            '3d-printer' => '3D Printer',
            '3d-printing-resin' => '3D Printing Resin',
        ];
        
        if (!array_key_exists($slug, $categoryMappings)) {
            abort(404);
        }
        
        // Find or create category with title field
        $category = ProductCategory::firstOrCreate(
            ['slug' => $slug],
            [
                'title' => $categoryMappings[$slug],
                'slug' => $slug
            ]
        );
        
        // Get products for this category
        $products = Product::whereHas('categories', function($query) use ($category) {
            $query->where('product_categories.id', $category->id);
        })->get();

        // Debug: Check what's happening
        \Log::info("Category: {$category->title}, Products count: " . $products->count());

        // Return different views based on category slug
        switch($slug) {
            case '3d-printer':
                return view('frontend.pages.products.3d-printer', compact('category', 'products'));
            case '3d-printing-resin':
                return view('frontend.pages.products.3d-printing-resin', compact('category', 'products'));
            
            default:
                abort(404);
        }
    }
    /**
     * Display the specified resource - Single Product Page
     */
    public function show($slug)
    {
        // Check if it's a product
        $product = Product::with('categories')
            ->where('slug', $slug)
            ->first();

        if ($product) {
            // Get related products (same category)
            $relatedProducts = Product::whereHas('categories', function($query) use ($product) {
                $query->whereIn('product_categories.id', $product->categories->pluck('id'));
            })
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

            return view('frontend.pages.products.singleproductpage', compact('product', 'relatedProducts'));
        }

        // If not found, return 404
        abort(404);
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = ProductCategory::all();
        // Load categories relationship
        $product->load('categories');
        return view('content.pages.product.create', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'description' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'categories' => 'required|array|min:1',
            'categories.*' => 'exists:product_categories,id',
        ]);

        // Handle file upload
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('featured_image')->store('products', 'public');
            $data['image'] = $imagePath;
        } else {
            // Keep the existing image
            $data['image'] = $product->image;
        }

        // Update product
        $product->update($data);

        // Sync categories
        $product->categories()->sync($data['categories']);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Delete associated image
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}