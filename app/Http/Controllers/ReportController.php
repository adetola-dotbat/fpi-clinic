<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request){
        
        $appoint_id = $request->query('appoint_id');
        // dd($appoint_id);
        $appointments = Appointment::findorfail($appoint_id);
        // dd($appointments);
        return view('clinic-admin.make-report', compact('appointments'));
    }

    public function create(Request $request){

        $request->validate([
            'reportFile'=>'required',
        ]);

        $report = new Report;
        $report->user_id =$request->user_id;
        $report->doctor_id =$request->doctor_id;
        $report->issue =$request->issue;
        
        $file = $request->reportFile;
        if($file){
            $filename = time(). '.' .$file->getClientOriginalExtension();
            $request->reportFile->move('report', $filename);
            $report->file = $filename;
        }

        $record = $report->save();

        if($record) {
            return back()->with('success', 'Successfull');
        }else {
            return back()->with('fail', 'Error, please check input');
        }

    }
}