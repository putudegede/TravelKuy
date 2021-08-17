<?php

namespace App\Controllers;

use App\Models\M_history;

class Home extends BaseController
{
	protected $M_history;
	public function __construct()
	{
		$this->M_history = new M_history;
	}
	public function index()
	{
		$history = $this->M_history->findAll();
		$data = [
			'title' => 'Home',
			'tampil' => 'Home/index',
			'history' => $history
		];
		echo view('dashboard/wrapper', $data);
	}
	public function save()
	{

		$this->M_history->save([
			'jenis' => $this->request->getVar('namaHotel'),
			'masuk' => $this->request->getVar('in'),
			'keluar' => $this->request->getVar('out'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashdata('message', 'Pesanan Berhasil !');
		return redirect()->to(base_url('Home'));
	}
	public function tiketPesawat()
	{

		$this->M_history->save([
			'jenis' => $this->request->getVar('maskapai'),
			'masuk' => $this->request->getVar('tanggalBerangkat'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashdata('message', 'Pesanan Berhasil !');
		return redirect()->to(base_url('Home'));
	}
	public function tiketKereta()
	{

		$this->M_history->save([
			'jenis' => $this->request->getVar('stasiunAsal'),
			'masuk' => $this->request->getVar('tanggalBerangkat'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashdata('message', 'Pesanan Berhasil !');
		return redirect()->to(base_url('Home'));
	}
	public function tiketBus()
	{

		$this->M_history->save([
			'jenis' => $this->request->getVar('terminalAsal'),
			'masuk' => $this->request->getVar('tanggalBerangkat'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashdata('message', 'Pesanan Berhasil !');
		return redirect()->to(base_url('Home'));
	}
	public function tiketKapal()
	{

		$this->M_history->save([
			'jenis' => $this->request->getVar('pelabuhanAsal'),
			'masuk' => $this->request->getVar('tanggalBerangkat'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashdata('message', 'Pesanan Berhasil !');
		return redirect()->to(base_url('Home'));
	}
	public function tiketSimaksi()
	{

		$this->M_history->save([
			'jenis' => $this->request->getVar('gunung'),
			'masuk' => $this->request->getVar('tanggalBerangkat'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashdata('message', 'Pesanan Berhasil !');
		return redirect()->to(base_url('Home'));
	}

	public function delete($id)
	{
		$this->M_history->delete($id);
		session()->setFlashdata('delete', 'Pesanan Berhasil Dibatalkan !');
		return redirect()->to(base_url('Home'));
	}

	public function update($id)
	{

		$this->M_history->save([
			'id' => $id,
			'jenis' => $this->request->getVar('namaHotel'),
			'masuk' => $this->request->getVar('in'),
			'keluar' => $this->request->getVar('out'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashdata('message', 'Pesanan Berhasil Di-Reschedule !');
		return redirect()->to(base_url('Home'));
	}
}
