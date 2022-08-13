<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    public function setTitleAttribute($value)
    {
        $this -> attributes['title'] = $value;
        $this -> attributes['slug'] = Str::slug($value);
    }

    public function user()
    {
        return $this -> belongsTo(User::class);
    }

    public function categories()
    {
        return $this -> belongsToMany(Category::class,'posts_categories');
    }
}

