<?php

namespace App\Models;

use CodeIgniter\Model;

class M_master_data extends Model
{
    public function get_admin()
    {
        $this->orderBy('id_user', 'DESC');
        return $this->findAll();
    }

    public function get_kategori_berkas()
    {
        return $this->db->table('tb_kategori_berkas')
            ->get()->getResultArray();
    }

    public function get_unit()
    {
        return $this->db->table('tb_unit')
            ->get()->getResultArray();
    }
}
