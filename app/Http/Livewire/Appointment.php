<?php

namespace App\Http\Livewire;

use App\Models\department;
use App\Models\Doctor;
use Livewire\Component;

class Appointment extends Component
{
    public $selectedDepartment = null;
    public $selectedDoctor = null;
    public $doctors;
    
    public function render()
    {
        return view('livewire.appointment',  [
            'depart' => department::all(),]);
    }

    public function updatedSelectedDepartment($doctors)
    {
        $this->doctors = Doctor::where('department_id', $doctors)->get();
    }
}