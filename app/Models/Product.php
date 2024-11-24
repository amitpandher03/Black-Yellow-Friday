<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'image', 'category_id', 'stock', 'discount_percentage', 'discounted_price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function averageRating()
    {
        return $this->reviews()->avg('rating') ?? 0;
    }

    public function reviewsCount()
    {
        return $this->reviews()->count();
    }

    protected static function boot()
    {
        parent::boot();
        
        static::saving(function ($product) {
            if ($product->discount_percentage > 0) {
                $product->discounted_price = $product->price * (1 - $product->discount_percentage / 100);
            } else {
                $product->discounted_price = $product->price;
            }
        });
    }
}
