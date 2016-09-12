<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    //do some cool stuff here
    public function index()
    {
    	return response()->json(null); 
    }

    public function showProfile()
    {
    	return response()->json("Hey there, my name is Pat!"); 
    }
}
