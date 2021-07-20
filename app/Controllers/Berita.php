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
        return view('Admin/Content/Form/tambah_berita', $data);
    }

    public function save()
    {
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
            ],
            'cover' => [
                'mime_in[cover,image/jpg,image/jpeg,image/png]',
            ]
        ])) {
            return redirect()->to('/Berita/tambah')->withInput();
        }

        $cover = $this->request->getFile('cover');
        $coverName = $cover->getRandomName();
        $cover->move('./upload/berita', $coverName);

        $this->m_berita->save([
            'id_kategori_berita' => $_POST['kategori'],
            'judul_berita' => $_POST['judul_berita'],
            'isi_berita' => $_POST['isi_berita'],
            'tgl_dilaksanakan' => $_POST['tgl_dilaksanakan'],
            'cover' => $coverName
        ]);
        $id_berita = $this->m_berita->getInsertID();

        session()->setFlashdata('message', 'Ditambahkan');

        return redirect()->to('/Berita/detail/' . $id_berita);
    }

    // public function upload_tinymce()
    // {
    //     $file = $this->request->getFile('file');

    //     if ($file) {
    //         return $file->move('upload/berita');
    //     }
    // }

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

    public function upload_tinymce()
    {
        $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',

            ]
        ]);

        if ($validated) {
            $file = $this->request->getFile('file');
            $fileName = $file->getRandomName();
            $writePath = './upload/berita';
            $file->move($writePath, $fileName);
            $this->response->setContentType('application/json', 'utf-8');
            return $this->response->setJSON(['location' => base_url('upload/berita/' . $fileName)]);
        } else {
            return $this->output->setHeader('HTTP/1.0 500 Server Error');
        }

        // return $this->response->setJSON($data);
    }

    public function detail($id_berita)
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Detail Berita';
        $data['berita'] = $this->m_berita->join('tb_kategori_berita', 'tb_kategori_berita.id_kategori_berita=tb_berita.id_kategori_berita')->find($id_berita);
        return view('Admin/Content/detail_berita', $data);
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

    public function save_update()
    {
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
            return redirect()->to('/Berita/update/' . $_POST['id_berita'])->withInput();
        }

        $cover = $this->request->getFile('cover');
        if ($cover->getError() == 4) {
            $coverName = $_POST['cover_lama'];
        } else {
            $coverName = $cover->getRandomName();
            $cover->move('./upload/berita', $coverName);
            // Hapus file lama
            if ($_POST['cover_lama'] != "") {
                if (file_exists('upload/berita/' . $_POST['cover_lama'])) {
                    unlink('upload/berita/' . $_POST['cover_lama']);
                }
            }
        }

        $this->m_berita->save([
            'id_berita' => $_POST['id_berita'],
            'id_kategori_berita' => $_POST['kategori'],
            'judul_berita' => $_POST['judul_berita'],
            'isi_berita' => $_POST['isi_berita'],
            'tgl_dilaksanakan' => $_POST['tgl_dilaksanakan'],
            'cover' => $coverName
        ]);

        session()->setFlashdata('message', 'Diubah');

        return redirect()->to('/Berita/detail/' . $_POST['id_berita']);
    }

    public function delete($id_berita)
    {
        $berita = $this->m_berita->find($id_berita);
        if (file_exists('upload/berita/' . $berita['cover'])) {
            unlink('upload/berita/' . $berita['cover']);
        }
        $this->m_berita->delete($id_berita);
        session()->setFlashdata('message', 'Dihapus');
        return redirect()->to('/Berita');
    }
}
