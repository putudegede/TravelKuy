<?php

namespace App\Controllers;

use App\Models\M_pesawat;

class Pesawat extends BaseController
{
	protected $M_pesawat;
	public function index()
	{


		$data = [
			'title'			=> 'Pesawat',
			'tampil'		=> 'Home/pesawat'
		];
		echo view('dashboard/wrapper', $data);
	}
}
