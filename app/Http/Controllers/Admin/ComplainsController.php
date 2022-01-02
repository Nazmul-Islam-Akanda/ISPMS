<?php

namespace App\Http\Controllers\Admin;

use App\Models\Complains;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComplainsController extends Controller
{
    public function complainsList()
    {
        $complains = Complains::with('user')->get();
        return view('admin.pages.complains-list',compact('complains'));
    }
}
