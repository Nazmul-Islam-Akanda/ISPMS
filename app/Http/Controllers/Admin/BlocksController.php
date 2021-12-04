<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Blocks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlocksController extends Controller
{
    public function blocksList()
    {
        $blocks = Blocks::with('user')->get();
        return view('admin.pages.blocks-list',compact('blocks'));
    }

    public function add()
    {
        $users=User::all();
        //dd($user);
        return view('admin.pages.add-blocks',compact('users'));
    }

    public function store(Request $request){
        // dd($request->all());
         Blocks::create([
             //field name for DB || field name for form
             'name'=>$request->name,
             'info'=>$request->info,
             'user_id'=>$request->user
         ]);
 
         return redirect()->back()->with('msg','Block added successfully');
     }

}
