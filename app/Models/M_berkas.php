<?php

namespace App\Models;

use CodeIgniter\Model;

class M_berkas extends Model
{
    protected $table = 'tb_berkas';
    protected $primaryKey = 'id_berkas';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_unit', 'id_kategori_berkas', 'nama_berkas', 'tahun', 'berkas', 'status'];

    public function get_berkas()
    {
        $this->join('tb_unit', 'tb_berkas.id_unit=tb_unit.id_unit');
        $this->join('tb_kategori_berkas', 'tb_berkas.id_kategori_berkas=tb_kategori_berkas.id_kategori_berkas');
        $this->orderBy('id_berkas', 'DESC');
        return $this->findAll();
    }

    public function get_berkas_wh($id)
    {
        $this->where(['id_berkas' => $id]);
        return $this->first();
    }
}
