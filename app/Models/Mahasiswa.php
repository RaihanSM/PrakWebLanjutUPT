<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps    = true;
    protected $dateFormat       = 'datetime';
    protected $allowedFields    = ['npm', 'nama', 'alamat'];
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
   
}