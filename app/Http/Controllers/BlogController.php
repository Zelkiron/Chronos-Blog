<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

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
        return view('blog.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'category_id' => 'required',
            'author_id' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $blog = Blog::create($data);

        return redirect(route('blog.show'))->with('success', 'Blog Created!');
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
