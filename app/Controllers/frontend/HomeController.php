<?php

namespace App\Controllers\frontend;
use CodeIgniter\Controller;

class HomeController extends Controller
{
	public function index()
	{
		return view('frontend/pages/home');
	}
}
