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
}
