<?php

namespace App\Controllers;

use App\Models\M_aspirasi;
use App\Models\M_home;

class Home extends BaseController
{
	protected $m_home;
	protected $m_aspirasi;
	public function __construct()
	{
		$this->m_home = new M_home();
		$this->m_aspirasi = new M_aspirasi();
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
		$data['prestasi'] = $this->m_home->get_prestasi();
		return view('Front/Content/prestasi', $data);
	}

	public function seminar()
	{
		$data['title'] = "Seminar | SISTEM INFORMASI BEM FTK UNDIKSHA";
		$data['seminar'] = $this->m_home->get_seminar();
		return view('Front/Content/seminar', $data);
	}

	public function berkas()
	{
		if (isset($_GET['cari'])) {
			$cari = $_GET['cari'];
			$data['judul'] = "Menampilkan hasil pencarian : <i>" . $cari . "</i>";
		} else {
			$cari = null;
			$data['judul'] = "INFORMASI BERKAS BEM FTK UNDIKSHA";
		}

		$data['title'] = "Berkas | SISTEM INFORMASI BEM FTK UNDIKSHA";
		$data['berkas'] = $this->m_home->get_berkas($cari);
		$data['pager'] = $this->m_home->pager;
		return view('Front/Content/berkas', $data);
	}

	public function detail($id_berita)
	{
		$data['title'] = "Detail | SISTEM INFORMASI BEM FTK UNDIKSHA";
		$data['berita'] = $this->m_home->get_detail_berita($id_berita);
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

	public function tambah_aspirasi()
	{
		return $this->m_aspirasi->save([
			'nama' => $_POST['nama'],
			'nim' => $_POST['nim'],
			'keluhan' => $_POST['keluhan'],
			'aspirasi' => $_POST['isi']
		]);
	}
}
