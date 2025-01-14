<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description'];
    protected $table  =  "blog";
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('F j, Y'); // Example: "January 9, 2025"
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
