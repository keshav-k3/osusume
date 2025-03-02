<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FoodCategory extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'description'
    ];

    /**
     * The restaurants that belong to the category.
     */
    public function restaurants(): BelongsToMany
    {
        return $this->belongsToMany(
            Restaurant::class,
            'restaurant_food_category',
            'food_category_id',
            'restaurant_id'
        );
    }
}
