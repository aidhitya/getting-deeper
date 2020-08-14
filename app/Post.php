<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Post extends Model
{
    protected $guarded = [];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
