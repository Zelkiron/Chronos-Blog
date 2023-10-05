<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $fillable = [
        'blog_id',
        'author_id',
        'content',
    ];

    public function getBlog() {
        $blogTitle = DB::table('blogs')->join('comments', 'comments.blog_id', '=', 'blog.id')->value('title');
        return $blogTitle;
    }

    public function getAuthor() {
        $author = DB::table('users')->join('comments', 'comments.author_id', '=', 'user.id')->value('username');
        return $author;
    }
    
    protected $conversions = [
        'blog_title' => $this->getBlog(),
        'author_name' => $this->getAuthor(),
    ];

    use HasFactory;
}
