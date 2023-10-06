<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function blogs() {
        return $this->hasMany(Blog::class);
    }

    public function number_of_blogs() {
        return $this->blogs()->count();
    }
    
    use HasFactory;
}
