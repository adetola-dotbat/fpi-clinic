<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'user_id',
        'booking_date',
        'doctor_id',
        'message',
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id', 'id');
    }
    
    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}