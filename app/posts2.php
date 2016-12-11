<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts2 extends Model
{
    //
    public $timestamps = false;
    protected $table = "posts2";
    protected $primaryKey = "id";
    protected $casts = ["id" => "INT"];
}
