<?php

namespace App\Http\Controllers\Admin;

use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeesSalaryController extends Controller
{
    public function salaryRecord()
    {
        return view('admin.pages.employess-salary-record');
    }

    public function add()
    {
        $departments=Departments::all();
        return view('admin.pages.add-employees-salary',compact('departments'));
    }
}
