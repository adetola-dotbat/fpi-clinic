<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $fillable = [
        'name',
        'department_id',
        'phone',
        'email',
    ];

    public function Department(){
        return $this->belongsTo(department::class,'department_id', 'id');
    }

    public function appointment(){
        return $this->hasMany(Appointment::class, 'doctor_id', 'id');
    }

    public function report(){
        return $this->hasMany(Report::class, 'doctor_id', 'id');
    }
}