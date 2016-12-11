<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Users;

class LoginController extends Controller
{
    //
    public function login(){
       return view('login.index');
    }

    public function loginprocess(Request $request){
       $username = $request->get('username');
       $password = $request->get('password');

       $checkuser = Users::selectRaw("Count(*) as Total")->where('Username','=',$username)->first();

       if(intval($checkuser->Total) > 0){
          //this is correct one
          $getpassword = Users::select("Password")->where('Username','=',$username)->first();
          if(password_verify($password,$getpassword->Password)){
              $request->session()->set('username',$username);
              return redirect('/home');
          }else{
              return redirect('/login');
          }
       }else{
          return redirect('/login');
       }

    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}
