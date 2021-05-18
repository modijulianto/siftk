<?php

namespace App\Controllers;

use App\Models\M_admin;

class Admin extends BaseController
{
    protected $m_admin;
    public function __construct()
    {
        $this->m_admin = new M_admin();
    }

    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['admin'] = $this->m_admin->get_admin();
        // dd($data['akun']);
        return view('Admin/Pages/DataTable/data_admin', $data);
    }
}
