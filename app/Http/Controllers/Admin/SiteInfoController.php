<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteInfoController extends Controller
{
    public function siteInfo(){
        $site_infos = SiteInfo::all();
        return view('admin.pages.site-info',compact('site_infos'));
    }

    public function add(){
        return view('admin.pages.add-site-info');
    }

    public function store(Request $request){
        // dd(date('Ymdhms'));
        $filename='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        // dd($request->all());
         SiteInfo::create([
             //field name for DB || field name for form
             'company_name'=>$request->name,
             'contact_info'=>$request->contact_info,
             'company_email'=>$request->email,
             'company_address'=>$request->address,
             'business_area'=>$request->business_area,
             'mobile_banking_info'=>$request->mobile_banking_info,
             'opening_hours'=>$request->opening_hours,
             'logo'=>$filename
         ]);
 
         return redirect()->back()->with('msg','Site Information added successfully.');
     }
}
