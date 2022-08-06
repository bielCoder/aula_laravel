<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    public $timestamps = false;
    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

   public function setTitleAttribute($value)
   {        
       $this -> attributes['title'] = $value;
       $this -> attributes['slug'] = str::slug($value);

   }
}
