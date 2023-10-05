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
        $comments = $blog->getComments();
        return view('blog.show', ['blog' => $blog, 'comments' => $comments]);
    }

    public function create() {
        return view('blog.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'category_id' => 'required|numeric',
            'author_id' => 'required|numeric',
            'title' => 'required',
            'content' => 'required'
        ]);

        $blog = Blog::create($data);

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
