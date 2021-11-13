<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDepartmentsController extends Controller
{
    public function userDepartmentsList()
    {
        return view('admin.pages.user-departments-list');
    }

    public function add()
    {
        return view('admin.pages.add-user-departments');
    }
}
