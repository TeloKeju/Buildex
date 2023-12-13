<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['username', 'email', 'password', 'nama_lengkap', 'no_telephone', 'kode_user', 'id_kontraktor', 'hashed_password'];
    protected $useTimestamps    = false;
}
