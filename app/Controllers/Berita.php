<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_berita;

class Berita extends BaseController
{
    protected $m_berita;
    protected $m_admin;
    public function __construct()
    {
        $this->m_berita = new M_berita();
        $this->m_admin = new M_admin();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Data Berita';
        $data['berita'] = $this->m_berita->get_berita();
        return view('Admin/Pages/DataTable/data_berita', $data);
    }

    public function tambah()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Tambah Berita';
        $data['validation'] = $this->validation;
        return view('Admin/Pages/Form/tambah_berita', $data);
    }

    public function save()
    {
        dd($_POST);
    }
}
