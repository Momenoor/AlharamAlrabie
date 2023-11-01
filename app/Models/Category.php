<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
    ];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function variants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CategoryVariant::class);
    }

    public function predefinedVariants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PredefinedVariant::class);
    }
}
