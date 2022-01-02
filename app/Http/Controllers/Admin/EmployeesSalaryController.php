<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployeesSalary;
use App\Http\Controllers\Controller;

class EmployeesSalaryController extends Controller
{
    public function salaryRecord()
    {
        $employeeSalaries=EmployeesSalary::all();
        return view('admin.pages.employess-salary-record',compact('employeeSalaries'));
    }

    public function add()
    {
        $users=User::where('role','Technician')->orWhere('role','Accountant')->get();
        return view('admin.pages.add-employees-salary',compact('users'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        EmployeesSalary::create([
            'employee_id'=>$request->employee_id,
            'date'=>$request->date,
            'paid'=>$request->paid,
            'advance'=>$request->advance,
            'bonus'=>$request->bonus,
            'status'=>$request->status,
        ]);
        return redirect()->back()->with('msg','Employee salary information added succesfully');
    }
}
