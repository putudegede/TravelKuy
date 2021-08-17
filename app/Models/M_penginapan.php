<?php

namespace App\Models;

use CodeIgniter\Model;

class M_penginapan extends Model
{
    protected $table = 'penginapan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    public function search($keyword)
    {
        // $builder = $this->table('penginapan');
        // $builder->like('namaHotel', $keyword);
        // // $builder->like('alamatHotel', $keyword);
        // return $builder;

        return $this->table('penginapan')->like('namaHotel', $keyword)->orlike('alamatHotel', $keyword);
    }
}
