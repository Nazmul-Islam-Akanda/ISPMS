<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customers;
use Illuminate\Http\Request;
use App\Models\CustomersIPMAC;
use App\Http\Controllers\Controller;

class Customers_IP_MAC_Controller extends Controller
{
    public function ipMAClist()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $customersIPMACs=CustomersIPMAC::with('customer')->where('approval','Approved')
            ->whereLike(['customer.customer_name','customer.customer_id','customer.status','connection_type','ip','mac'],$key)
            ->get();
            return view('admin.pages.customers-ip-mac-list',compact('customersIPMACs','key'));
        }
        $customersIPMACs=CustomersIPMAC::with('customer')->where('approval','Approved')->get();
        return view('admin.pages.customers-ip-mac-list',compact('customersIPMACs','key'));
    }

    public function add()
    {
        $customers=Customers::all();
        // dd($customers);
        return view('admin.pages.add-customers-ip-mac',compact('customers'));
    }

    public function store(Request $request){
        // dd($request->all());
        CustomersIPMAC::create([
            'customer_name_id'=>$request->customer_name,
            'customer_id_id'=>$request->customer_id,
            'connection_type'=>$request->connection_type,
            'ip'=>$request->ip,
            'mac'=>$request->mac
        ]);
        return redirect()->back()->with('msg','Customers IP/MAC address added successfully.');
    }

    public function edit($id)
    {
        $customersIPMAC=CustomersIPMAC::find($id);
        // dd($customersIPMAC);
        $customers=Customers::all();
        return view('admin.pages.edit-customers-ip-mac',compact('customersIPMAC','customers'));
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        //dd(date('Ymdhms'));

        $customersIPMAC=CustomersIPMAC::find($id);

        $customersIPMAC->update([
            //field name for DB || field name for form
            'customer_name_id'=>$request->customer_name,
            'customer_id_id'=>$request->customer_id,
            'connection_type'=>$request->connection_type,
            'ip'=>$request->ip,
            'mac'=>$request->mac

        ]);
        return redirect()->back()->with('msg','Customers IP/MAC address Updated successfully.');

    }

    public function delete($id)
    {
        CustomersIPMAC::find($id)->delete();
        return redirect()->back()->with('msg','Customers IP/MAC address Deleted.');
    }
}
