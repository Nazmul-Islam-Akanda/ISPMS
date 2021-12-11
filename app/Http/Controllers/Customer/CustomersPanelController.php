<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersPanelController extends Controller
{
    public function complain()
    {
        return view('customer.pages.complain');
    }
}
