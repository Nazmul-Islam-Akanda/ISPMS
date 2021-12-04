<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AssetsCategory;
use App\Http\Controllers\Controller;

class AssetsCategoryController extends Controller
{
    public function assetsCategory()
    {
        $categories=AssetsCategory::all();
        //dd($categories);
        return view('admin.pages.assets-category-list',compact('categories'));
    }

    public function add()
    {
        return view('admin.pages.add-assets-category');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        AssetsCategory::create([

            'name'=>$request->name

        ]);
        return redirect()->back()->with('msg','Assets Category added successfully.');
    }
}
