<?php

namespace App\Controllers\frontend;
use CodeIgniter\Controller;

class galleryController extends Controller
{
	public function index()
	{
		return view('frontend/pages/gallery/index');
	}
}