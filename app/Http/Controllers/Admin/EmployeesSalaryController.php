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
        $key=null;
        if(request()->search){
            $key=request()->search;
            $employeeSalaries=EmployeesSalary::with('user')
            ->whereLike(['user.name','user.user_id','paid','advance','bonus','date','status'],$key)
            ->get();
            return view('admin.pages.employess-salary-record',compact('employeeSalaries','key'));
        }
        $employeeSalaries=EmployeesSalary::with('user')->get();
        return view('admin.pages.employess-salary-record',compact('employeeSalaries','key'));
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
        return redirect()->back()->with('msg','Employee salary information added succesfully.');
    }

    public function details($salary_id)
    {
        $employeeSalary=EmployeesSalary::find($salary_id);
        return view('admin.pages.employee-salary-details',compact('employeeSalary'));
    }

    public function edit($salary_id)
    {
        $employeeSalary=EmployeesSalary::find($salary_id);
        $users = User::where('role','Technician')->orWhere('role','Accountant')->get();
        return view('admin.pages.edit-employees-salary',compact('employeeSalary','users'));
    }

    public function update(Request $request,$salary_id)
    {
        // dd($request->all());

        $employeeSalary=EmployeesSalary::find($salary_id);

        $employeeSalary->update([
            //field name for DB || field name for form
            'employee_id'=>$request->employee_id,
            'date'=>$request->date,
            'paid'=>$request->paid,
            'advance'=>$request->advance,
            'bonus'=>$request->bonus,
            'status'=>$request->status,

        ]);
        return redirect()->back()->with('msg','Employee Salary Updated successfully.');

    }

    public function delete($salary_id)
    {
        EmployeesSalary::find($salary_id)->delete();
        return redirect()->back()->with('msg','Employee Salary Information Deleted.');
    }
}
