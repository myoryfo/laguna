<?php

namespace App\Models;

use CodeIgniter\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];
}
