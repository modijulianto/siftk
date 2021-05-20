<?php

namespace App\Models;

use CodeIgniter\Model;

class M_master_data extends Model
{
    // ==================== KATEGORI BERKAS ====================
    public function get_kategori_berkas()
    {
        return $this->db->table('tb_kategori_berkas')
            ->orderBy('id_kategori_berkas', 'DESC')
            ->get()->getResultArray();
    }

    public function get_kategori_berkas_md5($id)
    {
        return $this->db->table('tb_kategori_berkas')
            ->where(['md5(id_kategori_berkas)' => $id])
            ->get()->getRowArray();
    }

    public function get_kategori_wh($id)
    {
        return $this->db->table('tb_kategori_berkas')
            ->where(['id_kategori_berkas' => $id])
            ->get()->getRowArray();
    }

    public function save_kategori_berkas()
    {
        $data = [
            'nama_kategori_berkas' => $_POST['nama']
        ];

        return $this->db->table('tb_kategori_berkas')->insert($data);
    }

    public function update_kategori_berkas()
    {
        $data = [
            'nama_kategori_berkas' => $_POST['nama']
        ];

        return $this->db->table('tb_kategori_berkas')
            ->where('id_kategori_berkas', $_POST['id'])
            ->update($data);
    }
    // ==================== END KATEGORI BERKAS ====================

    // ==================== UNIT ====================
    public function get_unit()
    {
        return $this->db->table('tb_unit')
            ->get()->getResultArray();
    }

    public function get_unit_md5($id)
    {
        return $this->db->table('tb_unit')
            ->where(['md5(id_unit)' => $id])
            ->get()->getRowArray();
    }

    public function get_unit_wh($id)
    {
        return $this->db->table('tb_unit')
            ->where(['id_unit' => $id])
            ->get()->getRowArray();
    }

    public function save_unit()
    {
        $data = [
            'nama_unit' => $_POST['nama']
        ];

        return $this->db->table('tb_unit')->insert($data);
    }

    public function update_unit()
    {
        $data = [
            'nama_unit' => $_POST['nama']
        ];

        return $this->db->table('tb_unit')
            ->where('id_unit', $_POST['id'])
            ->update($data);
    }
    // ==================== END UNIT ====================


    public function delete_($table, $where)
    {
        $this->db->table($table)->delete($where);
    }
}
