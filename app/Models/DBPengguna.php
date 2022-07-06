<?php

namespace App\Models;

use CodeIgniter\Model;

class DBPengguna extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengguna';
    protected $returnType       = 'object';
    protected $allowedFields    = [
            "posel",
            "password",
            "nama"
        ];
}
