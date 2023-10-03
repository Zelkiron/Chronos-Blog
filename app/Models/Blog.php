<?php

namespace App\Models;

use App\Models\Category;
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
        $category = Category::select('name')
        ->join('blogs', 'blogs.category_id', '=', 'categories.id');

        return $category;
    }
    use HasFactory;
}
