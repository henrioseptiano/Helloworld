<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Posts2 as Posts2;

class TextController extends Controller
{
    //
    public function submitted(Request $request){
        $title = $request->get('title');
        $body = $request->get('body');
        $posts = new posts2();
        $posts->title = $title;
        $posts->text = $body;
        $posts->save();
    }

    public function postlist(){
       $query = Posts2::select("*")->paginate(2);

       $data = [
          "posts" => $query
       ];

       return view('post.list',$data);
    }
}
