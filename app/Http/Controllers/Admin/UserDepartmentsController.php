<?php

namespace App\Http\Controllers\Admin;

use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserDepartmentsController extends Controller
{
    public function userDepartmentsList()
    {
        $departments=Departments::all();
        //dd($departments);
        return view('admin.pages.user-departments-list',compact('departments'));
    }

    public function add()
    {
        return view('admin.pages.add-user-departments');
    }

    public function store(Request $request){
       // dd($request->all());
        Departments::create([
            //field name for DB || field name for form
            'name'=>$request->name
        ]);

        return redirect()->back()->with('msg','User Department added successfully.');
    }


}
