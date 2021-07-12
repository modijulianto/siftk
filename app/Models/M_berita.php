<?php

namespace App\Models;

use CodeIgniter\Model;

class M_berita extends Model
{
    protected $table = 'tb_berita';
    protected $primaryKey = 'id_berita';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kategori_berita', 'judul_berita', 'isi_berita'];

    public function get_berita($id = null)
    {
        $this->join('tb_kategori_berita', 'tb_kategori_berita.id_kategori_berita=tb_berita.id_kategori_berita');
        if ($id) {
            $this->where('id_berita', $id);
            $this->orderBy('id_berita', 'DESC');
            return $this->first();
        } else {
            $this->orderBy('id_berita', 'DESC');
            return $this->findAll();
        }
    }

    public function get_kategori_berita()
    {
        return $this->db->table('tb_kategori_berita')
            ->get()->getResultArray();
    }
}
