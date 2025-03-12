<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel

    protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];

    protected $useTimestamps = true; // Aktifkan created_at & updated_at
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $returnType    = 'array'; // Format data yang dikembalikan
}
