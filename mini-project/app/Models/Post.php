<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image_path'];

    // Define the relationship with the Tag model
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
