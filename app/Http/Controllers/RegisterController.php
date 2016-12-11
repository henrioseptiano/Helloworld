<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Users;
use Carbon\Carbon;
class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index');
    }

    public function process(Request $request){
        $username = $request->get('username');
        $password = password_hash($request->get('password'),PASSWORD_BCRYPT);

        $user = new Users();
        $user->Username = $username;
        $user->Password = $password;
        $user->created_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $user->updated_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $user->save();

        return redirect('/login');
    }
}
