<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $message1="Message 1";
        $message2="Message 2";
        return view('index')->with(['message1'=> $message1, 'message2'=> $message2]);
    }
}
