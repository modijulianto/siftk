<?php

namespace App\Controllers;

use App\Models\M_admin;

class Dashboard extends BaseController
{
    protected $m_admin;
    public function __construct()
    {
        $this->m_admin = new M_admin();
    }

    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Dashboard';
        return view('Admin/Content/dashboard', $data);
    }
}
