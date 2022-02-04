<?php

namespace App\Http\Controllers\Admin;

use App\Models\Packages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
    
    Public function packagesList(){

        $key=null;
        if(request()->search){
            $key=request()->search;
            $packages=Packages::orderBy('price', 'ASC')
            ->whereLike(['name','price'],$key)
            ->get();
            return view('admin.pages.packages-list',compact('packages','key'));
        }
        $packages=Packages::orderBy('price', 'ASC')->get();
        return view('admin.pages.packages-list',compact('packages','key'));
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

    public function edit($id)
    {
        $package=Packages::find($id);
        return view('admin.pages.edit-packages',compact('package'));
    }

    public function update(Request $request,$id)
    {

        $package=Packages::find($id);

        $package->update([

            'name'=>$request->name,
            'price'=>$request->price

        ]);
        return redirect()->back()->with('msg','Package updated successfully.');

    }

    public function delete($id)
    {
        Packages::find($id)->delete();
        return redirect()->back()->with('msg','Package deleted.');
    }
}
