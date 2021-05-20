<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_berkas;
use App\Models\M_master_data;

class Berkas extends BaseController
{
    protected $m_admin;
    protected $m_berkas;
    protected $m_md;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $this->m_berkas = new M_berkas();
        $this->m_md = new M_master_data();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Data Berkas';
        $data['berkas'] = $this->m_berkas->get_berkas();
        $data['unit'] = $this->m_md->get_unit();
        $data['kat'] = $this->m_md->get_kategori_berkas();
        $data['validation'] = $this->validation;
        return view('Admin/Pages/DataTable/data_berkas', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'id_unit' => 'required|numeric',
            'id_kategori_berkas' => 'required|numeric',
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama berkas harus diisi']
            ],
            'tahun' => 'required|numeric',
            'status' => 'required',
            'berkas' => [
                'rules' => 'mime_in[berkas,application/pdf,application/doc,application/docx]',
                'errors' => ['mime_in' => 'Upload file berkas berformat <i>.pdf, .doc,</i> atau <i>.docx</i>']
            ],
        ])) {
            return redirect()->to('/Berkas')->withInput();
        }

        $file = $this->request->getFile('berkas');
        // generate nama random untuk nama File
        $namaBerkas = $file->getRandomName();
        // pindahkan file ke folder
        $file->move('upload', $namaBerkas);

        $this->m_berkas->save([
            'id_unit' => $this->request->getVar('id_unit'),
            'id_kategori_berkas' => $this->request->getVar('id_kategori_berkas'),
            'nama_berkas' => $this->request->getVar('nama'),
            'tahun' => $this->request->getVar('tahun'),
            'berkas' => $namaBerkas,
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', 'Ditambahkan');

        return redirect()->to('/Berkas');
    }

    public function get_berkas_by_id()
    {
        echo json_encode($this->m_berkas->get_berkas_wh($_POST['id']));
    }

    public function save_update()
    {
        if (!$this->validate([
            'id_unit' => 'required|numeric',
            'id_kategori_berkas' => 'required|numeric',
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama berkas harus diisi']
            ],
            'tahun' => 'required|numeric',
            'status' => 'required',
            'berkas' => [
                'rules' => 'ext_in[berkas, pdf,doc,docx]',
                'errors' => ['ext_in' => 'Upload file berkas berformat <i>.pdf, .doc,</i> atau <i>.docx</i>']
            ],
        ])) {
            return redirect()->to('/Berkas')->withInput();
        }

        $file = $this->request->getFile('berkas');
        $berkas_lama = $this->request->getVar('berkas_lama');

        // cek file, apakah tetap file yang lama
        if ($file->getError() == 4) {
            $namaBerkas = $berkas_lama;
        } else {
            // generate nama file random untuk nama foto
            $namaBerkas = $file->getRandomName();

            // pindahkan file ke folder
            $file->move('upload', $namaBerkas);

            // Hapus file lama
            if ($berkas_lama != "") {
                if (file_exists('upload/' . $berkas_lama)) {
                    unlink('upload/' . $berkas_lama);
                }
            }
        }

        $this->m_berkas->save([
            'id_berkas' => $this->request->getVar('id'),
            'id_unit' => $this->request->getVar('id_unit'),
            'id_kategori_berkas' => $this->request->getVar('id_kategori_berkas'),
            'nama_berkas' => $this->request->getVar('nama'),
            'tahun' => $this->request->getVar('tahun'),
            'berkas' => $namaBerkas,
            'status' => $this->request->getVar('status'),
            // 'id_unit' => session()->get('id_unit')
        ]);

        session()->setFlashdata('message', 'Diubah');

        return redirect()->to('/Berkas');
    }
}
