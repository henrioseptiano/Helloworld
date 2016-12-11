<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelloController extends Controller
{

    //
    public function index(){
       $data = [
          'first_name' => "Henrio",
          'last_name' => "Septiano"
       ];
       return view('hello.index',$data);
    }

    public function home(Request $requests){
       return view('home.index');
    }
}
