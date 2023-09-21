<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Post
 *
 * @mixin Eloquent
 */
class Item extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
        'slug',
    ];
}
