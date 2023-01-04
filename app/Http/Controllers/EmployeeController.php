<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->address  = $request->address;
        $employee->job_title  = $request->job_title;
        $employee->age  = $request->age;
        $employee->email  = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->save();
        return redirect('home')->with('status', 'Employee Form Data Has Been inserted');
    }
}
