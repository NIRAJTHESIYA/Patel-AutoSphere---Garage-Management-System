<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentBill extends Model
{
    use HasFactory;

    protected $table = 'generate_bill';
    protected $primaryKey = 'bill_id';
    public $timestamps = true;

    protected $fillable = [
        'appointment_id',
        'car_number',
        'kilometers',
        'services',
        'prices',
        'total_amount',
    ];

    protected $casts = [
        'services' => 'array',
        'prices' => 'array',   
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id', 'appointment_id');
    }
}
