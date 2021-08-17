<?php

namespace App\Controllers;

class Bus extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Bus',
			'tampil' => 'Home/bus',
		];

		echo view('dashboard/wrapper',$data);
	}
}
