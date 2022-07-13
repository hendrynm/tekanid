<?php

namespace App\Models;

use CodeIgniter\Model;

class DBLine extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'line';
    protected $returnType       = 'object';
    protected $allowedFields    = [
        "id_user",
        "display",
    ];
}
