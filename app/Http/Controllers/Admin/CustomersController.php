<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blocks;
use App\Models\Packages;
use App\Models\Customers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function customersList(){
        $customers=Customers::with('block','package')->get();
        return view('admin.pages.customers-list',compact('customers'));
    }

    public function add()
    {
        $blocks = Blocks::with('user')->get();
        $packages=Packages::all();
        return view('admin.pages.add-customers',compact('blocks','packages'));
    }

    public function store(Request $request)
    {
        //server side validation start
        // $request->validate([
        //     'contact_no'=>'required|min:11|max:11',
        //     'customer_id'=>'required|unique:users'
        // ]);
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
            'lineman_name_id'=>$request->user,
            'lineman_user_id_id'=>$request->user_id,
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','Customer added successfully');


    }
}
