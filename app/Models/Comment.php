<?php

namespace App\Models;

use Database\Factories\CommentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'author_name',
    ];

    protected static function newFactory(): CommentFactory
    {
        return new CommentFactory();
    }
}
