<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'author_id',
        'title',
        'content',
    ];

    public function getCategory() {
        $category = DB::table('categories')->join('blogs', 'blogs.category_id', '=', 'categories.id')->value('name');
        return $category;
    }

    public function getAuthor() {
        $author = DB::table('users')->join('blogs', 'blogs.author_id', '=', 'user.id')->value('username');
        return $author;
    }

    public function getComments() {
        $comments = DB::table('comments')->join('blogs', 'blogs.id', '=', 'comments.blog_id')->get();
        return $comments;
    }

    protected $conversions = [
        'category_name',
        'author_name',
    ];

    use HasFactory;
}
