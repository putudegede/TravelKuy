<?php

namespace App\Controllers;

use App\Models\M_penginapan;

class Penginapan extends BaseController
{
	protected $M_penginapan;
	public function __construct()
	{
		$this->M_penginapan = new M_penginapan();
	}
	public function index()
	{
		$keyword = $this->request->getVar('keyword');

		if($keyword) {
			$penginapan = $this->M_penginapan->search($keyword);
		}
		else {
			$penginapan = $this->M_penginapan->findAll();
		}
		$penginapan = $this->M_penginapan->findAll();
		
		$data = [
			'title'			=> 'Penginapan',
			'tampil'		=> 'Home/penginapan',
			'penginapan'	=> $penginapan
			// 'penginapan' => $this->M_penginapan->paginate(3),
			// 'pager' => $this->M_penginapan->pager

		];
		echo view('dashboard/wrapper',$data);
	}
	
}
