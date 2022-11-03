<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'usertype',
    ];


    public function appoint(){
        return $this->hasMany(Appointment::class, 'user_id', 'id');
    }
    public function report(){
        return $this->hasMany(Report::class, 'user_id', 'id');
    }
}