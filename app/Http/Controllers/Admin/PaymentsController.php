<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Payments;
use App\Models\Customers;
use Illuminate\Http\Request;
use App\Models\MobileBanking;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    public function paymentsList()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $payments=Payments::with('customer','user','mobileBanking')
            ->whereLike(['customer.customer_name','customer_name_id','customer.customer_id','customer_id_id','payment','month','year','mobileBanking.name','number','txnid','user.name','user.user_id','discount','reason'],$key)
            ->get();
            return view('admin.pages.payments-list',compact('payments','key'));
        }
        $payments=Payments::with('customer','user')->get();
        return view('admin.pages.payments-list',compact('payments','key'));
    }

    public function add()
    {
        $customers=Customers::all();
        $users = User::where('role','Accountant')->orWhere('role','Admin')->get();
        return view('admin.pages.add-payments',compact('customers','users'));
    }

    public function store(Request $request){
        // dd($request->all());
        Payments::create([
            'customer_name_id'=>$request->customer_name,
            'customer_id_id'=>$request->customer_id,
            'customer_id_id'=>$request->bill,
            'due'=>$request->due,
            'advance'=>$request->advance,
            'payment'=>$request->payment,
            'month'=>$request->month,
            'year'=>$request->year,
            'collector_id'=>$request->collector_id,
            'discount'=>$request->discount,
            'reason'=>$request->reason,
        ]);
        return redirect()->back()->with('msg','Payment made successfully.');
    }

    public function details($payment_id)
    {
        $payment=Payments::find($payment_id);
        return view('admin.pages.payment-details',compact('payment'));
    }

    public function edit($payment_id)
    {
        $payment=Payments::find($payment_id);
        $customers = Customers::all();
        $users = User::where('role','Accountant')->orWhere('role','Admin')->get();
        $mobile_bankings=MobileBanking::all();
        return view('admin.pages.edit-payments',compact('payment','customers','users','mobile_bankings'));
    }

    public function update(Request $request,$payment_id)
    {
        // dd($request->all());

        $payment=Payments::find($payment_id);

        $payment->update([
            //field name for DB || field name for form
            'customer_name_id'=>$request->customer_name,
            'customer_id_id'=>$request->customer_id,
            'due'=>$request->due,
            'advance'=>$request->advance,
            'payment'=>$request->payment,
            'month'=>$request->month,
            'year'=>$request->year,
            'collector_id'=>$request->collector_id,
            'discount'=>$request->discount,
            'reason'=>$request->reason,
            'mobile_banking_id'=>$request->mobile_banking,
            'number'=>$request->number,
            'txnid'=>$request->txnid,

        ]);
        return redirect()->back()->with('msg','Payment Information Updated successfully.');

    }

    public function delete($payment_id)
    {
        Payments::find($payment_id)->delete();
        return redirect()->back()->with('msg','Payment Deleted.');
    }
}
