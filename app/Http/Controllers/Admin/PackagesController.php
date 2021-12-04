<?php

namespace App\Http\Controllers\Admin;

use App\Models\Packages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
    
    Public function packagesList(){
        $packages=Packages::all();
        return view('admin.pages.packages-list',compact('packages'));
    }

    public function add(){
        return view('admin.pages.add-packages');
    }

    public function store(Request $request){
        //dd($request->all());
        Packages::create([
            //field name for DB || field name for form
            'name'=>$request->name,
            'price'=>$request->price
        ]);
        return redirect()->back()->with('msg','Package added successfully.');
    }
}
