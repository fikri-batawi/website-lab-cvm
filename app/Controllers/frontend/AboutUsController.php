<?php

namespace App\Controllers\frontend;
use CodeIgniter\Controller;

class AboutUsController extends Controller
{
	public function about()
	{
		 return view('frontend/pages/aboutus/about_us');
	}
}