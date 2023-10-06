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

    public function blog() {
        return $this->belongsTo(Blog::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
