<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\MorphTo;

class postcomment extends Model
{
    protected $fillable =
    [
        'author',
        'body',
        'commentable_id',
        'commentable_type',
    ];

    public function commentble(): MorphTo
    {
        return $this->morphTo();
    }
}
