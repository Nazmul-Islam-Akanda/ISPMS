<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blocks;
use App\Models\Packages;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function customersList(){
        return view('admin.pages.customers-list');
    }

    public function add()
    {
        $blocks = Blocks::all();
        $packages=Packages::all();
        $departments=Departments::all();
        return view('admin.pages.add-customers',compact('blocks','packages','departments'));
    }
}
