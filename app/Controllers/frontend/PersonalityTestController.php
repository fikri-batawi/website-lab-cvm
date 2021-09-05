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
	public function postQuestion(){
		$sanguinis = 0; $koleris = 0; $melankolis = 0; $plegmatis = 0;

		$question_answers = $this->request->getPost("answer_questions");

		foreach($question_answers as $question){
			foreach($question as $answer){
				switch($answer){
					case 'sanguinis' : {
						$sanguinis += 1;
						break;
					}
					case 'koleris' : {
						$koleris += 1;
						break;
					}
					case 'melankolis' : {
						$melankolis += 1;
						break;
					}
					case 'plegmatis' : {
						$plegmatis += 1;
						break;
					}
					default : break;					
				}
			}
		}

		$jumlah_input = $sanguinis + $koleris + $melankolis + $plegmatis;

		$sanguinis 	= number_format($sanguinis / $jumlah_input * 100,1);
		$koleris 		= number_format($koleris / $jumlah_input * 100, 1);
		$melankolis = number_format($melankolis / $jumlah_input * 100,1);
		$plegmatis 	= number_format($plegmatis / $jumlah_input * 100,1);

		return view('frontend/pages/features/personality/result',[
			'personality'		=> 'nama_personality',
			'sanguinis'			=> $sanguinis,
			'koleris'				=> $koleris,
			'melankolis'		=> $melankolis,
			'plegmatis'			=> $plegmatis,
		]);
	}	
}
