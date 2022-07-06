<?php

namespace App\Models;

use CodeIgniter\Model;

class DBTautan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tautan';
    protected $returnType       = 'object';
    protected $allowedFields    = [
        "id_tautan",
        "panjang",
        "pendek",
        "id_pengguna",
    ];
}
