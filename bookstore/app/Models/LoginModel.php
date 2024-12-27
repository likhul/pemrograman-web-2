<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'tb_pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['id_pengguna', 'username', 'password', 'nama_pengguna', 'level'];
    protected $returnType = 'array';
    
    public function cekLogin($username, $password)
    {
        // Anda dapat melakukan hash pada password di sini jika diperlukan
        return $this->where('BINARY username', $username)
                    ->where('password', $password)
                    ->first();
    }
}
