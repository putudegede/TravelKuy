<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'user';
    protected $primarykey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'date_created', 'date_updated'];

    
}