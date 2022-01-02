<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WebsiteUserController extends Controller
{
    public function userLogin(Request $request){
        // dd($request->all());
        $userPost=$request->except('_token');
        // dd($userPost);
        // dd(Auth::attempt($userPost));
        if (Auth::attempt($userPost)){
            return redirect()->route('dashboard')->with('msg','Login successful.');
        }
        else
        return redirect()->back()->with('msg','Incorrect User ID or Password!');
    }

    public function userLogout(){
        Auth::logout();
        return redirect()->route('website.user')->with('msg','Signed out.');
    }
}
