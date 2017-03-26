<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PPP;

class PppController extends Controller
{
	public function index() {
		$ppps = PPP::all();
		return view('home', ['ppps' => $ppps]);
	}
}
