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
        $key=null;
        if(request()->search){
            $key=request()->search;
            $assets=Assets::with('assetsCategory','user')
            ->whereLike(['assetsCategory.name','asset_name','quantity','user.name','user.user_id','status'],$key)
            ->get();
            return view('admin.pages.assets-list',compact('assets','key'));
        }
        $assets=Assets::with('assetsCategory','user')->get();
        return view('admin.pages.assets-list',compact('assets','key'));
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
        return redirect()->back()->with('msg','Asset added successfully.');
    }

    public function edit($asset_id)
    {
        $asset=Assets::find($asset_id);
        $categories=AssetsCategory::all();
        $users=User::where('role','Technician')->get();
        return view('admin.pages.edit-assets',compact('asset','categories','users'));
    }

    public function update(Request $request,$asset_id)
    {

        $asset=Assets::find($asset_id);

        $asset->update([
            //field name for DB || field name for form
            'category_id'=>$request->category,
            'asset_name'=>$request->asset_name,
            'quantity'=>$request->quantity,
            'user_id'=>$request->user_id,
            'status'=>$request->status,

        ]);
        return redirect()->back()->with('msg','Asset Updated successfully.');

    }

    public function delete($asset_id)
    {
        Assets::find($asset_id)->delete();
        return redirect()->back()->with('msg','Asset Deleted.');
    }

}
