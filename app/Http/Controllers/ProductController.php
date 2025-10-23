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
     * Display the specified resource - Single Product Page
     */
    public function show($slug)
    {
        $product = Product::with('categories')
            ->where('slug', $slug)
            ->firstOrFail();

        // Get related products (same category)
        $relatedProducts = Product::whereHas('categories', function($query) use ($product) {
            $query->whereIn('product_categories.id', $product->categories->pluck('id'));
        })
        ->where('id', '!=', $product->id)
        ->take(4)
        ->get();

        return view('frontend.pages.products.single', compact('product', 'relatedProducts'));
    }

    /**
     * Display products by category
     */
    public function category($categorySlug)
    {
        $category = ProductCategory::where('slug', $categorySlug)->firstOrFail();
        
        $products = Product::whereHas('categories', function($query) use ($category) {
            $query->where('product_categories.id', $category->id);
        })->get();

        return view('frontend.pages.products.category', compact('category', 'products'));
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