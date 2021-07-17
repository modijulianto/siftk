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
        return view('Admin/Content/DataTable/data_berita', $data);
    }

    public function tambah()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Tambah Berita';
        $data['kat'] = $this->m_berita->get_kategori_berita();
        $data['validation'] = $this->validation;
        return view('Admin/Content/Form/tambah_berita_ckeditor', $data);
    }

    public function save()
    {
        // print($_FILES);
        // dd($_POST);
        if (!$this->validate([
            'judul_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul berita harus diisi!'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih kategori berita!'
                ]
            ],
            'isi_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isikan isi berita!'
                ]
            ]
        ])) {
            return redirect()->to('/Berita/tambah')->withInput();
        }

        $this->m_berita->save([
            'id_kategori_berita' => $_POST['kategori'],
            'judul_berita' => $_POST['judul_berita'],
            'isi_berita' => $_POST['isi_berita']
        ]);

        session()->setFlashdata('message', 'Ditambahkan');

        return redirect()->to('/Berita');
    }

    public function upload_tinymce()
    {
        $file = $this->request->getFile('file');

        if ($file) {
            return $file->move('upload/berita');
        }
    }

    public function upload_ckeditor()
    {
        $validated = $this->validate([
            'upload' => [
                'uploaded[upload]',
                'mime_in[upload,image/jpg,image/jpeg,image/png]',

            ]
        ]);

        if ($validated) {
            $file = $this->request->getFile('upload');
            $fileName = $file->getRandomName();
            $writePath = './upload/berita';
            $file->move($writePath, $fileName);

            $data = [
                "uploaded" => true,
                "url" => base_url('upload/berita/' . $fileName)
            ];
        } else {
            $file = $this->request->getFile('upload');
            $data = [
                "uploaded" => false,
                "error" => [
                    "messages" => $file
                ]
            ];
        }

        return $this->response->setJSON($data);
    }

    public function update($id_berita)
    {
        $berita = $this->m_berita->find($id_berita);

        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Update Berita ' . $berita['judul_berita'];
        $data['kat'] = $this->m_berita->get_kategori_berita();
        $data['berita'] = $berita;
        $data['validation'] = $this->validation;
        return view('Admin/Content/Form/ubah_berita', $data);
    }
}
