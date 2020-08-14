<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Comment;
use App\Post;
use App\Tag;
use App\User;

class PolymorphicController extends Controller
{
    public function video()
    {
        return Video::with(['comments', 'tags'])->get();
    }

    public function post()
    {
        return Post::with(['comments', 'tags', 'image'])->get();
    }

    public function user()
    {
        return User::with(['image'])->get();
    }
}
