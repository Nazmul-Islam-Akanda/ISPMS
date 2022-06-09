<?php

namespace App\Http\Controllers\Admin;

use App\Events\MobileBankingEvent;
use Illuminate\Http\Request;
use App\Models\MobileBanking;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class MobileBankingController extends Controller
{
    public function mobileBankingList()
    {

        if(Cache::has('Mobile_banking'))
        {
            $mobile_bankings=Cache::get('Mobile_banking');
            $msg='Data from cache';
        }else{
            $mobile_bankings=MobileBanking::all();
            Cache::put('Mobile_banking',$mobile_bankings);
            $msg='Data from Database';
        }
        // dd($mobile_bankings);
        return view('admin.pages.mobile-banking-list',compact('mobile_bankings','msg'));
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

        event(new MobileBankingEvent());
        return redirect()->back()->with('msg','Mobile Banking added successfully.');
    }

    public function edit($id)
    {
        $mobile_banking=MobileBanking::find($id);
        return view('admin.pages.edit-mobile-banking',compact('mobile_banking'));
    }

    public function update(Request $request,$id)
    {

        $mobile_banking=MobileBanking::find($id);

        $mobile_banking->update([

            'name'=>$request->name

        ]);
        event(new MobileBankingEvent());
        return redirect()->back()->with('msg','Mobile Banking updated successfully.');

    }

    public function delete($id)
    {
        MobileBanking::findOrFail($id)->delete();
        event(new MobileBankingEvent());
        return redirect()->back()->with('msg','Mobile Banking deleted.');
    }
}
