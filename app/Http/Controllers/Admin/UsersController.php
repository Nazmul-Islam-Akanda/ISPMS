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
        $key=null;
        if(request()->search){
            $key=request()->search;
            $users = User::with('department')
            ->whereLike(['department.name','name','contact_no','email','user_id','role'],$key)
            ->get();
            return view('admin.pages.users-list',compact('users','key'));
        }
        $users = User::with('department')->get();
        return view('admin.pages.users-list',compact('users','key'));
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
            'role'=>$request->role,
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','User added successfully.');

    }

    public function edit($id)
    {
        $user=User::find($id);
        // dd($user);
        $departments=Departments::all();
        // dd($departments);
        return view('admin.pages.edit-users',compact('user','departments'));
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        //dd(date('Ymdhms'));

        $user=User::find($id);

        $filename=$user->image;
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
            'password'=>'required|min:4'
        ]);
        //server side validation end
        $user->update([
            //field name for DB || field name for form
            'name'=>$request->name,
            'contact_no'=>$request->contact_no,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'department_id'=>$request->department,
            'role'=>$request->role,
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','User Information Updated successfully.');

    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('msg','User Deleted.');
    }

    public function profile($id)
    {
        $user=User::find($id);
        // dd($user);
        return view('admin.pages.user-profile',compact('user'));
    }


    public function profileUpdate(Request $request,$id)
    {
        // dd($request->all());
        //dd(date('Ymdhms'));

        $user=User::find($id);

        $filename=$user->image;
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
            'password'=>'required|min:4',
            'email'=>'required'
        ]);
        //server side validation end
        $user->update([
            //field name for DB || field name for form
            'name'=>$request->name,
            'contact_no'=>$request->contact_no,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','Profile Information Updated successfully.');

    }

}
