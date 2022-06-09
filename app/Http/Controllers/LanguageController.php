<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage($local){

        App::setLocale($local);
        session()->put('applocale',$local);

        return redirect()->back();
        
    }
}
