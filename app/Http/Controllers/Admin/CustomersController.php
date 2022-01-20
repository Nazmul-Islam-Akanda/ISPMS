<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Blocks;
use App\Models\Packages;
use App\Models\Customers;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function customersList(){
        $key=null;
        if(request()->search){
            $key=request()->search;
            $customers=Customers::with('block','package','department','user')
            ->whereLike(['block.name','package.name','department.name','user.name','user.user_id','customer_name','customer_id','customer_type','bill_type'],$key)
            ->get();
            return view('admin.pages.customers-list',compact('customers','key'));
        }

        $customers=Customers::with('block','package','department','user')->get();
        return view('admin.pages.customers-list',compact('customers','key'));
    }

    public function add()
    {
        $blocks = Blocks::all();
        $packages=Packages::all();
        $departments=Departments::where('name','Technical')->orWhere('name','Admin')->get();
        $users = User::where('role','Technician')->orWhere('role','Admin')->get();
        // $users = User::where('id',auth()->user()->id)->get();
        return view('admin.pages.add-customers',compact('blocks','packages','departments','users'));
    }

    public function store(Request $request)
    {
        //server side validation start
        $request->validate([
            'contact_no'=>'required|min:11|max:11',
            'customer_id'=>'required|unique:Customers'
        ]);
        //server side validation end

        // dd(date('Ymdhms'));
        $filename='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }

        // dd($request->all());
        Customers::create([
            //field name for DB || field name for form
            'block_id'=>$request->block,
            'customer_name'=>$request->customer_name,
            'address'=>$request->address,
            'contact_no'=>$request->contact_no,
            'email'=>$request->email,
            'customer_id'=>$request->customer_id,
            'date'=>$request->date,
            'customer_type'=>$request->customer_type,
            'bill_type'=>$request->bill_type,
            'package_id'=>$request->package,
            'charge'=>$request->charge,
            'service_charge'=>$request->service_charge,
            'department_id'=>$request->department,
            'lineman_id'=>$request->user,
            'lineman_id'=>$request->user_id,
            'status'=>$request->status,
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','Customer added successfully');


    }

    public function details($customer_id)
    {
        $customer=Customers::find($customer_id);
        return view('admin.pages.customer-details',compact('customer'));
    }

    public function edit($customer_id)
    {
        $customer=Customers::find($customer_id);
        $blocks = Blocks::all();
        $packages=Packages::all();
        $departments=Departments::where('name','Technical')->orWhere('name','Admin')->get();
        $users = User::where('role','Technician')->orWhere('role','Admin')->get();
        return view('admin.pages.edit-customers',compact('customer','blocks','packages','departments','users'));
    }

    public function update(Request $request,$customer_id)
    {
        // dd($request->all());
        //dd(date('Ymdhms'));

        $customer=Customers::find($customer_id);

        $filename=$customer->image;
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
            'contact_no'=>'required|min:11|max:11'
        ]);
        //server side validation end
        $customer->update([
            //field name for DB || field name for form
            'block_id'=>$request->block,
            'customer_name'=>$request->customer_name,
            'address'=>$request->address,
            'contact_no'=>$request->contact_no,
            'email'=>$request->email,
            'date'=>$request->date,
            'customer_type'=>$request->customer_type,
            'bill_type'=>$request->bill_type,
            'package_id'=>$request->package,
            'charge'=>$request->charge,
            'service_charge'=>$request->service_charge,
            'department_id'=>$request->department,
            'lineman_id'=>$request->user,
            'lineman_id'=>$request->user_id,
            'status'=>$request->status,
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','Customer Information Updated successfully');

    }

    public function delete($customer_id)
    {
        Customers::find($customer_id)->delete();
        return redirect()->back()->with('msg','Customer Deleted.');
    }
}
