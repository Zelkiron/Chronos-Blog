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

    protected $conversions = [
        'category_name',
        'author_name',
    ];

    public function getCategory() {
        $category = DB::table('categories')->join('blogs', 'blogs.category_id', '=', 'categories.id')->value('name');
        if(!$category) {
            return "Category not found";
        }
        return $category;
    }

    public function getAuthor() {
        $author = DB::table('users')->join('blogs', 'blogs.author_id', '=', 'users.id')->value('username');
        return $author;
    }

    public function getComments() {
        $comments = DB::table('comments')->join('blogs', 'blogs.id', '=', 'comments.blog_id')->get();
        return $comments;
    }

    use HasFactory;
}
