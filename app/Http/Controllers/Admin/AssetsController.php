<?php

namespace App\Http\Controllers\Admin;

use App\Models\Departments;
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
        $departments=Departments::all();
        return view('admin.pages.add-assets',compact('categories','departments'));
    }

}
