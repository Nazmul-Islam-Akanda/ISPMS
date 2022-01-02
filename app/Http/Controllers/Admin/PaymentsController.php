<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Payments;
use App\Models\Customers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    public function paymentsList()
    {
        $payments=Payments::with('customer','user')->get();
        return view('admin.pages.payments-list',compact('payments'));
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
        return redirect()->back()->with('msg','Payment made successfully');
    }
}
