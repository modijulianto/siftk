<?php

namespace App\Controllers;

use App\Models\M_admin;

class Auth extends BaseController
{
    protected $m_admin;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $session = \Config\Services::session();
    }

    public function index()
    {
        $data = [
            'title' => 'Login | Sistem Informasi Fakultas Teknik dan Kejuruan'
        ];
        return view('Auth/login', $data);
    }

    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $akun = $this->m_admin->get_akun($email);

        // dd($akun);
        if ($akun) {
            if (password_verify($password, $akun['password'])) {
                // dd($akun);
                $data = [
                    'id_user' => $akun['id_user'],
                    'nama' => $akun['nama_user'],
                    'email' => $akun['email'],
                ];
                session()->set($data);
                return redirect()->to('/Dashboard');
            } else {
                session()->setFlashdata('message', '<div class="alert alert-warning" role="alert"><b>Failed!</b> wrong password!</div>');
                return redirect()->to('/Auth');
            }
        } else {
            session()->setFlashdata('message', '<div class="alert alert-warning" role="alert"><b>Failed!</b> your email is not registered!</div>');
            return redirect()->to('/Auth');
        }
    }

    public function blocked()
    {
        return view('Auth/blocked');
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('registered', '<div class="alert alert-success" role="alert"><b>Congratulation!</b> you have been logout!</div>');
        return redirect()->to('/Auth');
    }

    //--------------------------------------------------------------------

}
