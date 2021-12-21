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
        $customersIPMACs=CustomersIPMAC::with('customer')->get();
        return view('admin.pages.customers-ip-mac-list',compact('customersIPMACs'));
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
        return redirect()->back()->with('msg','Customers IP/MAC address added successfully');
    }
}
