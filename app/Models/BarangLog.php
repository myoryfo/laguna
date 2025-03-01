<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangLog extends Model
{
    protected $table = 'barang_log';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'barang_id',
        'user_id',
        'status_id',
        'created_at',

    ];
}
