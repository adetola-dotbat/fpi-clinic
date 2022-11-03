<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $tale = 'reports';

    protected $fillable = [
       
        'file',
    ];


    
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    
    
}