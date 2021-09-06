<?php

namespace App\Controllers\frontend;
use CodeIgniter\Controller;

class ProductController extends Controller
{
	public function personality()
	{
		return view('frontend/pages/product/personality');
	}
}
