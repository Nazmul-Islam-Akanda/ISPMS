<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Blocks;
use App\Models\Packages;
use App\Models\Payments;
use App\Models\Complains;
use App\Models\Customers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        $users=User::all();
        $count['customers']=Customers::all()->count();
        $count['payments']=Payments::all()->count();
        $count['complains']=Complains::all()->count();
        $count['blocks']=Blocks::all()->count();
        $count['packages']=Packages::all()->count();
        return view('admin.pages.dashboards',compact('users','count'));
    }

}
