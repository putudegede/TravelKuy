<?php

namespace App\Models;

use CodeIgniter\Model;

class M_history extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['jenis', 'masuk', 'keluar', 'harga'];
}
