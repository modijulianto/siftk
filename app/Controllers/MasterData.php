<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_master_data;

class MasterData extends BaseController
{
    protected $m_admin;
    protected $m_md;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $this->m_md = new M_master_data();
    }

    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['kat'] = $this->m_md->get_kategori_berkas();
        // dd($data['akun']);
        return view('Admin/Pages/DataTable/data_kategori_berkas', $data);
    }
}
