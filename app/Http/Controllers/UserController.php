<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		return response()->json(['success_code' => 'all is good'], 200);
	}
}