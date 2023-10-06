<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function create(Blog $blog, Request $request) {
        $comment_data = $request->validate([
            'content' => 'required|string'
        ]);
        
        $comment_data['blog_id'] = $blog->id;
        $comment_data['author_id'] = Auth::id();

        Comment::create($comment_data);

        return redirect(route('blog.show', ['blog' => $blog]))->with('success', 'Comment Created!');
    }
}
