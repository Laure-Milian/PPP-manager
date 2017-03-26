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

	public function create(Request $request) {
		$ppp = new PPP;
		$ppp->user_id = $request->user_id;
		$ppp->progress = $request->progress;
		$ppp->problems = $request->problems;
		$ppp->planned = $request->planned;
		$ppp->notes = $request->notes;
		$ppp->save();
	}
}
