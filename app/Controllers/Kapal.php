<?php

namespace App\Controllers;

class Kapal extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Kapal',
			'tampil' => 'Home/kapal',
		];

		echo view('dashboard/wrapper',$data);
	}
}
