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
        $key=null;
        if(request()->search){
            $key=request()->search;
            $blocks = Blocks::with('user')
            ->whereLike(['name','info','user.name','user.user_id'],$key)
            ->get();
            return view('admin.pages.blocks-list',compact('blocks','key'));
        }
        $blocks = Blocks::with('user')->get();
        return view('admin.pages.blocks-list',compact('blocks','key'));
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
 
         return redirect()->back()->with('msg','Block added successfully.');
     }

     public function edit($block_id)
    {
        $block = Blocks::find($block_id);
        $users=User::all();
        return view('admin.pages.edit-blocks',compact('block','users'));
    }

    public function update(Request $request,$block_id)
    {

        $block = Blocks::find($block_id);

        $block->update([
            //field name for DB || field name for form
            'name'=>$request->name,
             'info'=>$request->info,
             'user_id'=>$request->user

        ]);
        return redirect()->back()->with('msg','Block Updated successfully.');

    }

    public function delete($block_id)
    {
        Blocks::find($block_id)->delete();
        return redirect()->back()->with('msg','Block deleted.');
    }

}
