<?php

namespace App\Controllers\frontend;
use CodeIgniter\Controller;

class PersonalityTestController extends Controller
{
	public function index()
	{
		return view('frontend/pages/features/personality/index');
	}
	public function getQuestion()
	{
		return view('frontend/pages/features/personality/question');
	}
}
