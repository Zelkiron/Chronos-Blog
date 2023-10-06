<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        return view('blog.index', ['blogs' => $blogs]);
    }

    public function show(Blog $blog) {
        return view('blog.show', ['blog' => $blog]);
    }

    public function create() {
        $categories = Category::all();
        return view('blog.create', ['categories' => $categories]);
    }

    public function store(Request $request) {
        $blog_data = $request->validate([
            'category_id' => 'required|string|numeric',
            'title' => 'required|string',
            'content' => 'required|string'
        ]);

        $blog_data['author_id'] = Auth::id();

        $blog = Blog::create($blog_data);

        return redirect(route('blog.show', ['blog' => $blog]))->with('success', 'Blog Created!');
    }

    public function edit(Blog $blog) {
        return view('blog.edit', ['blog' => $blog]);
    }

    public function update(Blog $blog, Request $request) {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $blog->update($data);

        return redirect(route('blog.show'))->with('success', 'Blog Updated!');
    }

    public function destroy(Blog $blog) {
        $blog->delete();

        return redirect(route('blogs.index'))->with('success', 'Blog Deleted!');
    }
}
