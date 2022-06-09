<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AssetsCategory;
use App\Http\Controllers\Controller;

class AssetsCategoryController extends Controller
{
    public function assetsCategory()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $categories=AssetsCategory::whereLike(['name'],$key)
            ->get();
            return view('admin.pages.assets-category-list',compact('categories','key'));
        }
        $categories=AssetsCategory::all();
        return view('admin.pages.assets-category-list',compact('categories','key'));
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

    public function edit($category_id)
    {
        $category=AssetsCategory::find($category_id);
        return view('admin.pages.edit-assets-category',compact('category'));
    }

    public function update(Request $request,$category_id)
    {

        $category=AssetsCategory::find($category_id);

        $category->update([

            'name'=>$request->name

        ]);
        return redirect()->back()->with('msg','Assets Category updated successfully.');

    }

    public function delete($category_id)
    {
        AssetsCategory::find($category_id)->delete();
        return redirect()->back()->with('msg','Assets Category deleted.');
    }
}
