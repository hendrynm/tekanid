<?php

namespace App\Models;

use CodeIgniter\Model;

class DBZoom extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'zoom';
    protected $returnType       = 'object';
    protected $allowedFields    = [
        "token",
        "refresh",
        "time",
    ];
}
