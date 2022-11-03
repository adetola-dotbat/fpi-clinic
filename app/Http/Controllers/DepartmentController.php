<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Http\Requests\StoredepartmentRequest;
use App\Http\Requests\UpdatedepartmentRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::all();
        return view('clinic-admin/department', compact('department'));
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
     * @param  \App\Http\Requests\StoredepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $req->validate([
            'name'=>'required|unique:departments',
        ]);
        $department = Department::create([
            'name' => $req->name,
        ]);
        if($department) {
            return back()->with('success', 'Department added successfully');
        }else {
            return back()->with('fail', 'No Department added... Please check your input');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedepartmentRequest  $request
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedepartmentRequest $request, department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(department $department, $id)
    {
        $department = department::findorfail($id);
        $department->delete();
        return redirect()->back()->with('delete', 'Record deleted successfully');
    }
}