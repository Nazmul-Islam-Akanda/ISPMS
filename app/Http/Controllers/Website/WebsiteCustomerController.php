<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WebsiteCustomerController extends Controller
{
    public function customerLogin(Request $request){
        // dd($request->all());
        $customerPost=$request->except('_token');
        // dd($customerPost);
        // dd(Auth::attempt($customerPost));
        if (Auth::attempt($customerPost)){
            return redirect()->route('customer.complains')->with('msg','Login successful.');
        }
        else
        return redirect()->back()->with('msg','Incorrect Customer ID or Contact number!');
    }

    public function customerLogout(){
        Auth::logout();
        return redirect()->route('website.customer')->with('msg','Logged out.');
    }
}
