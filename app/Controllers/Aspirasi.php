<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_aspirasi;

class Aspirasi extends BaseController
{
    protected $m_admin;
    protected $m_aspirasi;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $this->m_aspirasi = new M_aspirasi();
    }

    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Data Aspirasi';
        $data['aspirasi'] = $this->m_aspirasi->findAll();
        return view('Admin/Content/DataTable/data_aspirasi', $data);
    }

    public function delete($id_aspirasi)
    {
        $this->m_aspirasi->delete($id_aspirasi);

        session()->setFlashdata('message', 'Dihapus');
        return redirect()->to('/Aspirasi');
    }
}
