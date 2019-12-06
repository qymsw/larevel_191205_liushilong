<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
    public function index()
    {
    	return "TestController/index";
    }

    public function create()
    {
    	return "TestController/create";
    }

    public function edit($id)
    {
    	return "TestController/edit".$id;
    }

    public function show($id)
    {
    	return "TestController/show".$id;
    }
}
