<?php

namespace App\Controllers;

class Simaksi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Simaksi',
			'tampil' => 'Home/simaksi',
		];

		echo view('dashboard/wrapper',$data);
	}
}
