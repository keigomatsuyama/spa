<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petlove extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    // コメント
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // お気に入り
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}