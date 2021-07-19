<?php

namespace App\Models;

use CodeIgniter\Model;

class M_aspirasi extends Model
{
    protected $table = 'tb_aspirasi';
    protected $primaryKey = 'id_aspirasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nim', 'keluhan', 'aspirasi'];
}
