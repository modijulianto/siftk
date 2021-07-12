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
        $this->validation = \Config\Services::validation();
    }


    // ======================= KATEGORI BERKAS =======================
    public function index()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Data Kategori Berkas';
        $data['kat'] = $this->m_md->get_kategori_berkas();
        $data['validation'] = $this->validation;
        return view('Admin/Content/DataTable/data_kategori_berkas', $data);
    }

    public function save_kategori()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama kategori berkas harus diisi']
            ],
        ])) {
            return redirect()->to('/MasterData/kategori_berkas')->withInput();
        }

        $this->m_md->save_kategori_berkas();
        session()->setFlashdata('message', 'Ditambahkan');
        return redirect()->to('/MasterData/kategori_berkas');
    }

    public function update_kategori()
    {
        echo json_encode($this->m_md->get_kategori_wh($_POST['id']));
    }

    public function save_update_kategori()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama kategori berkas harus diisi']
            ],
        ])) {
            return redirect()->to('/MasterData/kategori_berkas')->withInput();
        }

        $this->m_md->update_kategori_berkas();
        session()->setFlashdata('message', 'Diubah');
        return redirect()->to('/MasterData/kategori_berkas');
    }

    public function delete_kategori_berkas($id)
    {
        $data = $this->m_md->get_kategori_berkas_md5($id);
        $where = array('id_kategori_berkas' => $data['id_kategori_berkas']);
        $table = 'tb_kategori_berkas';
        $this->m_md->delete_($table, $where);
        return redirect()->to('/MasterData/kategori_berkas');
    }
    // ======================= END KATEGORI BERKAS =======================

    // UNIT
    public function unit()
    {
        $data['akun'] = $this->m_admin->get_akun(session()->get('email'));
        $data['title'] = 'Data Unit';
        $data['unit'] = $this->m_md->get_unit();
        $data['validation'] = $this->validation;
        return view('Admin/Content/DataTable/data_unit', $data);
    }

    public function save_unit()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama unit berkas harus diisi']
            ],
        ])) {
            return redirect()->to('/MasterData/unit')->withInput();
        }

        $this->m_md->save_unit();
        session()->setFlashdata('message', 'Ditambahkan');
        return redirect()->to('/MasterData/unit');
    }

    public function update_unit()
    {
        echo json_encode($this->m_md->get_unit_wh($_POST['id']));
    }

    public function save_update_unit()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama unit berkas harus diisi']
            ],
        ])) {
            return redirect()->to('/MasterData/unit')->withInput();
        }

        $this->m_md->update_unit();
        session()->setFlashdata('message', 'Diubah');
        return redirect()->to('/MasterData/unit');
    }

    public function delete_unit($id)
    {
        $data = $this->m_md->get_unit_md5($id);
        $where = array('id_unit' => $data['id_unit']);
        $table = 'tb_unit';
        $this->m_md->delete_($table, $where);
        return redirect()->to('/MasterData/unit');
    }
    // END UNIT
}
