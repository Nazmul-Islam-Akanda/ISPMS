<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use App\Models\Payments;
use App\Models\Complains;
use Illuminate\Http\Request;
use App\Models\MobileBanking;
use App\Http\Controllers\Controller;

class CustomersPanelController extends Controller
{
    public function complain()
    {
        $users = User::where('role','Technician')->orWhere('role','Admin')->get();
        return view('customer.pages.complain',compact('users'));
    }

    public function complainStore(Request $request)
    {
        // dd($request->all());
        Complains::create([
            'customer_id'=>$request->customer_id,
            'resolver_id'=>$request->resolver_id,
            'complain'=>$request->complain
        ]);
        return redirect()->back()->with('msg','Complain sent successfully.');
    }

    public function payment()
    {
        $mobile_bankings=MobileBanking::all();
        return view('customer.pages.payment',compact('mobile_bankings'));
    }

    public function paymentStore(Request $request)
    {
        // dd($request->all());
        Payments::create([
            'customer_name_id'=>$request->customer_name,
            'customer_id_id'=>$request->customer_id,
            'mobile_banking_id'=>$request->mobile_banking,
            'number'=>$request->number,
            'txnid'=>$request->txnid,
            'due'=>$request->due,
            'advance'=>$request->advance,
            'payment'=>$request->payment,
            'month'=>$request->month,
            'year'=>$request->year,
        ]);
        return redirect()->back()->with('msg','Payment made successfully');
    }
}
