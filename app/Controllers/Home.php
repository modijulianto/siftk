<?php

namespace App\Controllers;

use App\Models\M_home;

class Home extends BaseController
{
	protected $m_home;
	public function __construct()
	{
		$this->m_home = new M_home();
	}

	public function index()
	{
		$data['title'] = "SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/beranda', $data);
	}

	public function beasiswa()
	{
		$data['title'] = "Beasiswa | SISTEM INFORMASI BEM FTK UNDIKSHA";
		$data['beasiswa'] = $this->m_home->get_beasiswa();
		return view('Front/Content/beasiswa', $data);
	}

	public function prestasi()
	{
		$data['title'] = "Prestasi | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/prestasi', $data);
	}

	public function seminar()
	{
		$data['title'] = "Seminar | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/seminar', $data);
	}

	public function berkas()
	{
		$data['title'] = "Berkas | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/berkas', $data);
	}

	public function detail()
	{
		$data['title'] = "Detail | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/detail', $data);
	}

	public function kerumahtanggaan()
	{
		$data['title'] = "Kerumahtanggaan | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/kerumahtanggaan', $data);
	}

	public function pendidikan_penalaran()
	{
		$data['title'] = "Pendidikan Penalaran | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/pendidikan_penalaran', $data);
	}

	public function pengurus_inti()
	{
		$data['title'] = "Pengurus Inti | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/pengurus_inti', $data);
	}

	public function psdm()
	{
		$data['title'] = "PSDM | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/psdm', $data);
	}

	public function sosmas()
	{
		$data['title'] = "Sosial Masyarakat | SISTEM INFORMASI BEM FTK UNDIKSHA";
		return view('Front/Content/sosmas', $data);
	}
}
