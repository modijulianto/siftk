<?php

namespace App\Models;

use CodeIgniter\Model;

class M_admin extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_user', 'email', 'password'];

    public function get_akun($email)
    {
        return $this->where(['email' => $email])->first();
    }

    public function get_admin()
    {
        $this->orderBy('id_user', 'DESC');
        return $this->findAll();
    }

    public function get_user_wh($id)
    {
        $this->where(['id_user' => $id]);
        return $this->first();
    }

    public function get_user_md5($id)
    {
        $this->where('md5(id_user)', $id);
        return $this->first();
    }
}
