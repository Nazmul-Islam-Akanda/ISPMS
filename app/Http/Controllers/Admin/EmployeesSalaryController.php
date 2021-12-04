<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesSalaryController extends Controller
{
    public function salaryRecord()
    {
        return view('admin.pages.employess-salary-record');
    }

    public function add()
    {
        return view('admin.pages.add-employees-salary');
    }
}
