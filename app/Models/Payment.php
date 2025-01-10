<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'cart_id',
        'payment_status',
        'razorpay_payment_id',
        'token',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'cart_id');
    }
}
