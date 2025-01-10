<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $primaryKey = 'appointment_id';

    protected $table = 'appointments';

    protected $fillable = [
        'customer_id',
        'name',
        'phone',
        'email',
        'vehicle_name',
        'vehicle_model',
        'vehicle_year',
        'appointment_date',
        'appointment_time_slot',
        'services',
        'status',
    ];

    protected $casts = [
        'services' => 'array',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    public function appointmentBill()
    {
        return $this->hasOne(AppointmentBill::class, 'appointment_id', 'appointment_id');
    }

    public $timestamps = true;
}
