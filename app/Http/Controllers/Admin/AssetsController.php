<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Assets;
use Illuminate\Http\Request;
use App\Models\AssetsCategory;
use App\Http\Controllers\Controller;

class AssetsController extends Controller
{
    public function assetsList()
    {
        $assets=Assets::with('assetsCategory')->get();
        return view('admin.pages.assets-list',compact('assets'));
    }

    public function add()
    {
        $categories=AssetsCategory::all();
        //dd($categories);
        $users=User::where('role','Technician')->get();
        return view('admin.pages.add-assets',compact('categories','users'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Assets::create([

            'category_id'=>$request->category,
            'asset_name'=>$request->asset_name,
            'quantity'=>$request->quantity,
            'user_id'=>$request->user_id,
            'status'=>$request->status,

        ]);
        return redirect()->back()->with('msg','Assets added successfully.');
    }

}
