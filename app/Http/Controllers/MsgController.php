<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MsgController extends Controller
{
    //

    public function index (){
    	return view('index')->with('name','qyamon');
    }
}
