<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function usersList()
    {
        $users = User::with('department')->Where('department_id','=','1')->get();
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
        //dd(date('Ymdhms'));

        $filename='';
        //Check image or not
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);

        }
        //end Checking image or not

        //server side validation start
        $request->validate([
            'name'=>'required',
            'contact_no'=>'required|min:11|max:11',
            'user_id'=>'required|unique:users',
            'password'=>'required|min:4'
        ]);
        //server side validation end
        User::create([
            //field name for DB || field name for form
            'name'=>$request->name,
            'contact_no'=>$request->contact_no,
            'email'=>$request->email,
            'user_id'=>$request->user_id,
            'password'=>bcrypt($request->password),
            'department_id'=>$request->department,
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','User added successfully');

    }
}
