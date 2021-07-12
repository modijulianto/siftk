<?php

namespace App\Models;

use CodeIgniter\Model;


class M_home extends Model
{
    public function get_beasiswa()
    {
        return $this->db->table('tb_berkas')
            ->where('id_kategori_berkas', 7)
            ->get()->getResultArray();
    }
}
