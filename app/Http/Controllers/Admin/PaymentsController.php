<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    public function paymentsList()
    {
        return view('admin.pages.payments-list');
    }

    public function add()
    {
        return view('admin.pages.add-payments');
    }
}
