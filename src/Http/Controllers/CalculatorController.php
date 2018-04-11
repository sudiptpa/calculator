<?php

namespace Lalustine7\Calculator\Http\Controllers;

use App\Http\Controllers\Controller;

class CalculatorContorller extends Controller
{
	public function index(){
		return view('calculator::lalustine-index');
	}
}