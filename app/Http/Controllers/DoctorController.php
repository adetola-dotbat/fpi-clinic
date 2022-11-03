<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\department;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = department::all();
        $doctors = Doctor::all();
        return view('clinic-admin.doctor', compact('department', 'doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|unique:doctors',
            'phone'=>'required',
            'department_id'=>'required',
        ]);

        $doctor = Doctor::create([
            'name'=> $req->name,
            'email'=> $req->email,
            'phone'=> $req->phone,
            'department_id'=> $req->department_id,
        ]);

        // dd($doctor);    

        if($doctor) {
            return back()->with('success', 'Doctor added successfully');
        }else {
            return back()->with('fail', 'No Doctor added... Please check your input');
        }
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor, $id)
    {
        $doctor_edit = Doctor::findorfail($id)->first();
        // dd($doctor_edit);
        $departments = department::all();
        $doctors = Doctor::all();
        return view('clinic-admin.edit-doctor', compact('departments', 'doctors', 'doctor_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Doctor $doctor, $id)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'department_id'=>'required',
        ]);

        $doctor = Doctor::where('id', $id)->update([
            'name'=> $req->name,
            'email'=> $req->email,
            'phone'=> $req->phone,
            'department_id'=> $req->department_id,
        ]);

        // dd($doctor);    

        if($doctor) {
            return back()->with('success', 'Doctor updated successfully');
        }else {
            return back()->with('fail', 'No Doctor update... Please check your input');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor, $id)
    {
        $doctor = Doctor::findorfail($id);
        $doctor->delete();
        Return redirect()->back()->with('delete', "Record deleted successfully");
    }
}