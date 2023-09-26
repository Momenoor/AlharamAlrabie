<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Post
 *
 * @mixin Eloquent
 */
class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
        'type',
        'is-show_in_menu',
    ];

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class)->using(CategoryProduct::class)->withPivot(['price', 'image'])->withTimestamps();
    }

    protected function categoriesIds(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->categories->pluck('id')->toArray(),
        );
    }
}
