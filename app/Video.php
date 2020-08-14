<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Video extends Model
{
    protected $guarded = [];


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
