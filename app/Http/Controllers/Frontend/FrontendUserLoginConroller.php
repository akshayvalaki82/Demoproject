<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Admin\User;
use App\Http\Controllers\Controller;
use Auth;

class FrontendUserLoginConroller extends Controller
{
    public function index (){
        return view('frontend/auth-page/login');
    }
    
    public function userlogin(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
         // do whatever yo desire
         return redirect('/mainpage');
        // $admin_name = config('app.admin_name');
        // $customer_name = config('app.customer_name'); 
        // // dd($customer_name);

        // if(Auth::user()->hasRole($admin_name) )
        // {
        //     return redirect($this->redirectTo);
        // }
        // elseif(Auth::user()->hasRole($customer_name) )
        // {
        //     return redirect('/mainpage');
        // }
        // return redirect('/login');
        }
        else{

            return redirect()->back()->with('message', 'email or password is incorrect');
        }
    }
    // public function userregister(Request $request){
    //     // $user_data[]=[];
    //     // dd(request('firstname'));
    //     $user_data[] = [
    //         'firstname' => request('firstname'),
    //         'lastname' => request('lastname'),
    //         'email' => request('email'),
    //         'password' => bcrypt(request('password'))
    //     ];
    //     if(!empty($user_data)){
    //         User::insert($user_data);
    //     }
    //     return redirect()->back();
    // }
    
    public function logout(Request $request){
        Auth::logout();
        return redirect('/user-login');
    }
}
