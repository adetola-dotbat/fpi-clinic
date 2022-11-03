<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Report;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'booking_date'=>'required',
            'doctor_id'=>'required',
            'message'=>'required',
        ]);

        $doctor = Appointment::create([
            'user_id'=>$request->user_id,
            'booking_date'=>$request->booking_date,
            'doctor_id'=>$request->doctor_id,
            'message'=>$request->message,
        ]);

        // dd($doctor);    

        if($doctor) {
            return back()->with('success', 'You have successfully booked apointment with your doctor, please check dashboard or email for feedback');
        }else {
            return back()->with('fail', 'Error..., Please re-book your appointment');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointments = Appointment::where('user_id', $id)->get();
        // dd($appointments);
        $reports = Report::where('user_id', $id)->get();

        return view('customer.view-appointment', compact('appointments', 'reports'));
    }

    public function view_appointment()
    {
        $appointments = Appointment::all();
        // dd($appointments);
        return view('clinic-admin.admin-view-appoint', compact('appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function approveAppoint($id)
    {
        $appointment = Appointment::findorfail($id);
        // dd($appointment);
        $appointment->status = 'accepted';
        $appointment->save();
        return redirect()->back();

    }
    public function pendAppoint($id)
    {
        $appointment = Appointment::findorfail($id);
        // dd($appointment);
        $appointment->status = 'pending';
        $appointment->save();
        return redirect()->back();

    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentRequest  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment, $id)
    {
        $appointment = Appointment::findorfail($id);
        $appointment->delete();
        return redirect()->back()->with('delete', 'Record Deleted');
    }
}