<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_berkas;

class Berkas extends BaseController
{
    protected $m_admin;
    protected $m_berkas;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $this->m_berkas = new M_berkas();
    }

    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Data Berkas';
        $data['berkas'] = $this->m_berkas->get_berkas();
        // dd($data['akun']);
        return view('Admin/Pages/DataTable/data_berkas', $data);
    }
}
