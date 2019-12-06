<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Msg;

class MsgController extends Controller
{
	public function index() {
		$msgs = Msg::all();
		// var_dump($msgs);
		// print_r($msgs);
		// echo $msgs[0]->title;
		return view('index')->with('msgs',$msgs);
		// return "sdsdsd";
	}

	public function view($id) {
		return view('view')->withMsg(Msg::find($id));
	}








    //
    // public $arr = ['name'=>'qyamon','text'=>'msw','aaa'=>'aaa'];

    // public function index (){
    // 	return view('index')->with($this->arr);
    // }
}
