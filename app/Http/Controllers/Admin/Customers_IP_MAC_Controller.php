<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Customers_IP_MAC_Controller extends Controller
{
    public function ipMAClist()
    {
        return view('admin.pages.customers-ip-mac-list');
    }

    public function add()
    {
        return view('admin.pages.add-customers-ip-mac');
    }
}
