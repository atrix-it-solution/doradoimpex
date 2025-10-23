<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::all();
        return view('content.pages.blog.index', compact('blogs'));
    }

    /**
     * Display blog listing FOR FRONTEND WEBSITE
     */
    public function frontendIndex()
    {
        $blogs = Blog::latest()->get();
        return view('frontend.pages.blog.blog', compact('blogs')); // Frontend view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.pages.blog.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'description' => 'nullable|string',
            'shot_description' => 'nullable|string|max:500',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'author' => 'nullable|string|max:255',
        ]);

        // Handle file uploads
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }
        if ($request->hasFile('author_image')) {
            $data['author_image'] = $request->file('author_image')->store('authors', 'public');
        }

        blog::create($data);

        return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
    }

   /**
     * Display the specified resource FOR FRONTEND
     */
    public function show(Blog $blog)
    {
        return view('frontend.pages.blog.single-blog', compact('blog')); // Frontend single blog view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        return view('content.pages.blog.create-edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'description' => 'nullable|string',
            'shot_description' => 'nullable|string|max:500',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'author' => 'nullable|string|max:255',
        ]);

        // Handle file uploads
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }
        if ($request->hasFile('author_image')) {
            $data['author_image'] = $request->file('author_image')->store('authors', 'public');
        }

        $blog->update($data);

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully!');
    }
}
