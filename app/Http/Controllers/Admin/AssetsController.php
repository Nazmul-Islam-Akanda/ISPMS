<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AssetsCategory;
use App\Http\Controllers\Controller;

class AssetsController extends Controller
{
    public function assetsList()
    {
        return view('admin.pages.assets-list');
    }

    public function add()
    {
        $categories=AssetsCategory::all();
        //dd($categories);
        return view('admin.pages.add-assets',compact('categories'));
    }

}
