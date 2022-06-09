<?php

namespace App\Http\Controllers\Website;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordEmail;
use App\Http\Controllers\Controller;
use App\Jobs\SendResetPasswordJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class WebsiteCustomerController extends Controller
{
    public function customerLogin(Request $request){
        // dd($request->all());
        $customerPost=$request->except('_token');
        // dd($customerPost);
        // dd(Auth::attempt($customerPost));
        if (Auth::attempt($customerPost)){
            return redirect()->route('customer.complains')->with('msg','Login successful.');
        }
        else
        return redirect()->back()->with('msg','Incorrect Customer ID or Contact number!');
    }

    public function customerLogout(){
        Auth::logout();
        return redirect()->route('website.customer')->with('msg','Logged out.');
    }

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try{
            $user =Socialite::driver('facebook')->user();
            $isUser=User::where('facebook_id',$user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect()->route('customer.complains')->with('msg','Login successful.');
            }
            else{
                $createUser=User::create([
                    'name'=>$user->name,
                    'contact_no'=>'01683674873',
                    'email'=>$user->email,
                    'user_id'=>$user->email,
                    'facebook_id' => $user->id,
                    'password'=>bcrypt('01683674873'),
                    'role'=>'Customer',
                    'image'=>'$filename'
                ]);

                Auth::login($createUser);
                return redirect()->route('customer.complains')->with('msg','Login successful.');
            }

        } catch (\Throwable $exception){
            dd($exception->getMessage());
        }
    }


    public function forgetPassword()
    {
        return view('website.pages.customer-password-forget');
    }

    public function forgetPasswordEmailPost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email'=>'required|exists:users'
        ]);
        try{
            //generate link to send
            $token=Str::random(40);
                // dd($token);
            // dd(Carbon::now());
            $user=User::where('email',$request->email)->first();
            $user->update([
                'reset_token'=>$token,
                'reset_token_expire_at'=>Carbon::now()->addMinute(2),
            ]);
            $link=route('website.customers.reset.password',$token);

            //**Previous Code to send mail without Job and Queue */
            // Mail::to($request->email)->send(new ResetPasswordEmail($link));

            //Using Job Mail Send
            dispatch(new SendResetPasswordJob($link,$user->email));

            return redirect()->back()->with('msg','Email sent to: '.$request->email);

        } catch(\Throwable $exception)
        {
            dd($exception->getMessage());
        }

    }

    public function resetPassword($token)
    {
        return view('website.pages.customer-password-reset',compact('token'));
    }

    public function resetPasswordPost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'reset_token'=>'required',
            'password'=>'required|confirmed'
        ]);

        //check token exist or not
        $userHasToken=User::where('reset_token',$request->reset_token)->first();
        if($userHasToken){
            //check token expire or not
            if($userHasToken->reset_token_expire_at>=Carbon::now()){
                $userHasToken->update([
                    'password'=>bcrypt($request->password),
                'reset_token'=>null
                ]);

                return redirect()->back()->with('msg','Password Reset Seccessful.');
            }
            else{
                return redirect()->back()->withErrors('token Expired');
            }
        }else{
            return redirect()->back()->withErrors('Token not found.');
        }
    }
}
