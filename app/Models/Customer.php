<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $table = 'customer';

    protected $primaryKey = 'customer_id';

    public $timestamps = true;

    protected $fillable = [
        'customer_name',
        'first_name',
        'last_name',
        'email',
        'password',
        'contact_no',
        'address',
        'city',
        'pincode',
        'otp',
        'otp_expires_at',
        'is_email_verified',
    ];

    protected $casts = [
        'otp_expires_at' => 'datetime',
        'is_email_verified' => 'boolean',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
