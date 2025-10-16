<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'shot_description',
        'featured_image',
        'author',
        'author_image',
    ];
}
