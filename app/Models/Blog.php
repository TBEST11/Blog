<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title',
                        'content',
                        'image',
                        ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
