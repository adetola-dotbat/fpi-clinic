<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $fillable = [
        'name',
    ];

    public function Doctor(){
        return $this->hasMany(Doctor::class, 'department_id', 'id');
    }

   
}