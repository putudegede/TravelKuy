<?php

namespace App\Controllers;

class Kereta extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Kereta',
			'tampil' => 'Home/kereta',
		];

		echo view('dashboard/wrapper',$data);
	}
}
