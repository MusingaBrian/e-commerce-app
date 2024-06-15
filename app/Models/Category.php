<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    // Guarding the Id against multi assignment

    protected $guarded = ['id'];

    //Defining the relationship 

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
