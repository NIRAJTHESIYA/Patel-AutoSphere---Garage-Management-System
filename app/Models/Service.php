<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

        protected $primaryKey = 'service_id'; // Defining custom primary key

        // Fillable fields for mass assignment
        protected $fillable = [
            'service_name',
            'service_description',
            'service_topic',
            'service_image',
            'service_icon',
            'price_range',
        ];

    public $timestamps = true;
}
