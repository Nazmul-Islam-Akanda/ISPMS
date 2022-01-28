<?php

namespace App\Http\Controllers\Admin;

use App\Models\Complains;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComplainsController extends Controller
{
    public function complainsList()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $complains = Complains::with('user')
            ->whereLike(['user.name','user.user_id','customer_id','complain'],$key)
            ->get();
            return view('admin.pages.complains-list',compact('complains','key'));
        }
        $complains = Complains::with('user')->get();
        return view('admin.pages.complains-list',compact('complains','key'));
    }

    public function complainsStatus($id)
    {
        $complain=Complains::find($id);
// dd($complain);
        if($complain->status=='Hold')
        {
            $complain->update([
                'status'=>'Processing'
            ]);
            return redirect()->back()->with('msg','Complain status updated successfully.');

        }
        if($complain->status=='Processing')
        {
            $complain->update([
                'status'=>'Completed'
            ]);
            return redirect()->back()->with('msg','Complain status updated successfully.');
        }
        if($complain->status=='Completed')
        {
            $complain->update([
                'status'=>'Completed'
            ]);
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $complain=Complains::find($id)->delete();
        return redirect()->back()->with('msg','Complain Deleted.');
    }
}
