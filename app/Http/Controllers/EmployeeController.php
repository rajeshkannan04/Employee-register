<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee_table;
use App\Models\Department;
use App\Models\Designation;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::get();
        $designation = Designation::get();
        return view('employee', compact('department','designation'));
    }

    public function show()
    {
        $employee = Employee_table::get();
        return view('showEmployee', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee= new Employee_table();
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->DOB = $request->dob;
        $employee->address = $request->address;
        $employee->mobile = $request->mobile;
        $employee->email = $request->email;
        $employee->department_id = $request->department;
        $employee->designation_id = $request->designation;
        $employee->DOJ = $request->doj;
        if ($request->file('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalName();
            $imagePath = $image->storeAs('public/uploads', $filename);
            $employee->image = $filename;
        }
        $employee->save();
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Employee_table::find($id);
        $department = Department::get();
        $designation = Designation::get();
        return view('updateEmployee', compact('department','designation','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee= Employee_table::find($id);
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->DOB = $request->dob;
        $employee->address = $request->address;
        $employee->mobile = $request->mobile;
        $employee->email = $request->email;
        $employee->department_id = $request->department;
        $employee->designation_id = $request->designation;
        $employee->DOJ = $request->doj;
        if ($request->file('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalName();
            $imagePath = $image->storeAs('public/uploads', $filename);
            $employee->image = $filename;
        }
        $employee->save();
        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Employee_table::find($id);
        $data->delete();
        return redirect('/employee');
    }
}
