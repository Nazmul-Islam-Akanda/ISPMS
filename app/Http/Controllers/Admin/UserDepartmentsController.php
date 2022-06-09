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

    public function edit($department_id)
    {
        $department=Departments::find($department_id);
        return view('admin.pages.edit-user-departments',compact('department'));
    }

    public function update(Request $request,$department_id)
    {

        $department=Departments::find($department_id);

        $department->update([

            'name'=>$request->name

        ]);
        return redirect()->back()->with('msg','User Department updated successfully.');

    }

    public function delete($department_id)
    {
        Departments::find($department_id)->delete();
        return redirect()->back()->with('msg','User Department deleted.');
    }


}
