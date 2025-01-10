<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'product_price',
        'product_photo_1',
        'product_photo_2',
        'product_photo_3',
        'product_photo_4',
        'product_photo_5',
        'availability',
        'description',
        'short_description',
        'brand',
        'color',
        'product_dimensions',
        'vehicle_type',
        'warranty',
        'car_model',
        'status',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
