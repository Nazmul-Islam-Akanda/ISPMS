<?php

namespace App\Http\Controllers\Website;

use App\Models\Packages;
use App\Models\SiteInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteHomeController extends Controller
{
    public function home()
    {
        $packages=Packages::all();
        $site_infos = SiteInfo::all();
        return view('website.pages.home',compact('packages','site_infos'));
    }

    public function user()//Admin/User Login
    {
        $packages=Packages::all();
        $site_infos = SiteInfo::all();
        return view('website.pages.user',compact('packages','site_infos'));
    }

    public function customer()
    {
        $packages=Packages::all();
        $site_infos = SiteInfo::all();
        return view('website.pages.customer',compact('packages','site_infos'));
    }
}
