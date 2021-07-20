<?php

namespace App\Models;

use CodeIgniter\Model;


class M_home extends Model
{
    protected $table = 'tb_berkas';
    protected $primarKey = 'id_berkas';

    public function get_beasiswa()
    {
        return $this->db->table('tb_berkas')
            ->where('id_kategori_berkas', 7)
            ->get()->getResultArray();
    }

    public function get_prestasi()
    {
        return $this->db->table('tb_berita')
            ->where('id_kategori_berita', 2)
            ->get()->getResultArray();
    }

    public function get_seminar()
    {
        return $this->db->table('tb_berita')
            ->where('id_kategori_berita', 1)
            ->get()->getResultArray();
    }

    public function get_berkas($cari = null)
    {
        if ($cari) {
            $this->like('nama_berkas', $cari);
        }
        return $this->paginate(1, 'tb_berkas');
    }
}
