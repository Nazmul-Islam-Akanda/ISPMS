<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CustomersIPMAC;
use App\Http\Controllers\Controller;

class Customers_IP_MAC_Approval_Controller extends Controller
{
    public function ipMACapprovalList()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $customersIPMACs=CustomersIPMAC::with('customer')->where('approval','Unapproved')
            ->whereLike(['customer.customer_name','customer.customer_id','customer.status','connection_type','ip','mac'],$key)
            ->get();
            return view('admin.pages.customers-ip-mac-approval-list',compact('customersIPMACs','key'));
        }
        $customersIPMACs=CustomersIPMAC::with('customer')->where('approval','Unapproved')->get();
        return view('admin.pages.customers-ip-mac-approval-list',compact('customersIPMACs','key'));
    }

    public function ipMACapprove($id)
    {
        //find the data
        $customersIPMAC=CustomersIPMAC::find($id);
       $customersIPMAC->update([
           'approval'=>'Approved'
       ]);

       return redirect()->back()->with('msg','Customers IP/MAC address Approved successfully.');
    }
}
