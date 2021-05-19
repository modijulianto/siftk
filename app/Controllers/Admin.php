<?php

namespace App\Controllers;

use App\Models\M_admin;

class Admin extends BaseController
{
    protected $m_admin;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Data Admin';
        $data['admin'] = $this->m_admin->get_admin();
        $data['validation'] = $this->validation;
        // dd($data['akun']);
        return view('Admin/Pages/DataTable/data_admin', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama harus diisi']
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[tb_user.email]',
                'errors' => ['is_unique' => 'Email sudah terdaftar']
            ],
            'password' => [
                'rules' => 'required|min_length[6]|matches[retypePassword]',
                'errors' => [
                    'min_length' => 'Panjang password minimal 6 karakter',
                    'matches' => 'Password tidak sama.'
                ]
            ],
            'retypePassword' => [
                'rules' => 'required|min_length[6]|matches[password]',
                'errors' => [
                    'min_length' => 'Panjang password minimal 6 karakter',
                    'matches' => 'Password tidak sama.'
                ]
            ],
        ])) {
            return redirect()->to('/Admin')->withInput();
        }

        $this->m_admin->save([
            'nama_user' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);

        session()->setFlashdata('message', 'Ditambahkan');

        return redirect()->to('/Admin');
    }

    public function update_admin()
    {
        echo json_encode($this->m_admin->get_user_wh($_POST['id']));
    }

    public function save_update()
    {
        if (!$this->validate([
            'nama' => 'required',
            'email' => 'required|valid_email'
        ])) {
            return redirect()->to('/Admin')->withInput();
        }

        $this->m_admin->save([
            'id_user' => $this->request->getVar('id'),
            'nama_user' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
        ]);

        session()->setFlashdata('message', 'Diubah');

        return redirect()->to('/Admin');
    }

    public function delete($id)
    {
        $data = $this->m_admin->get_akun(session()->get('email'));

        if (md5($data['id_user']) != $id) {
            $user = $this->m_admin->get_user_md5($id);
            $this->m_admin->delete($user['id_user']);
            session()->setFlashdata('message', 'Dihapus');
        } else {
            session()->setFlashdata('warning-msg', 'Anda tidak bisa menghapus akun Anda sendiri!');
        }
        return redirect()->to('/Admin');
    }
}
