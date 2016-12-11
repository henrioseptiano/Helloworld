<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Users;
class FetchController extends Controller
{
    //
    public function index(){
         $user = Users::selectRaw("Username, created_at, updated_at")
         ->whereRaw("Username = ? AND created_at = ?",["yangka","2016-10-29 23:04:57"])
         ->first();
         $data = [
            'user' => $user
         ];
         return view('fetch.index',$data);
    }
}
