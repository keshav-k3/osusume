<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'latitude',
        'longitude',
        'google_place_id',
        'instagram_handle',
        'image_url'
    ];

    /**
     * The categories that belong to the restaurant.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            FoodCategory::class,
            'restaurant_food_category',
            'restaurant_id',
            'food_category_id'
        );
    }
}
