<?php

namespace App\Http\Controllers\Admin;

use App\Models\UsersModel;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function usersList()
    {
        $users = UsersModel::with('department')->get();
        return view('admin.pages.users-list',compact('users'));
    }

    public function add()
    {
        $departments=Departments::all();
        //dd($departments);
        return view('admin.pages.add-users',compact('departments'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        UsersModel::create([
            //field name for DB || field name for form
            'name'=>$request->name,
            'contact_no'=>$request->contact_no,
            'email'=>$request->email,
            'user_id'=>$request->user_id,
            'password'=>$request->password,
            'department_id'=>$request->department

        ]);
        return redirect()->back();

    }
}
