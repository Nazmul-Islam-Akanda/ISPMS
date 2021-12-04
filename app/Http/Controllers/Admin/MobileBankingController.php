<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MobileBanking;
use App\Http\Controllers\Controller;

class MobileBankingController extends Controller
{
    public function mobileBankingList()
    {
        $mobile_bankings=MobileBanking::all();
        // dd($mobile_bankings);
        return view('admin.pages.mobile-banking-list',compact('mobile_bankings'));
    }

    public function add()
    {
        return view('admin.pages.add-mobile-banking');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        MobileBanking::create([
            'name'=>$request->name
        ]);
        return redirect()->back()->with('msg','Mobile Banking added successfully.');
    }
}
