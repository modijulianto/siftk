<?php

namespace App\Models;

use CodeIgniter\Model;

class M_berita extends Model
{
    protected $table = 'tb_berita';
    protected $primaryKey = 'id_berita';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul_berita', 'isi_berita'];

    public function get_berita($id = null)
    {
        if ($id) {
            $this->where('id_berita', $id);
            $this->orderBy('id_berita', 'DESC');
            return $this->first();
        } else {
            $this->orderBy('id_berita', 'DESC');
            return $this->findAll();
        }
    }
}
