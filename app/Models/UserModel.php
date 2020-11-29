<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'image', 'Alamat', 'no_telp'];

    public function getUser($flag = false)
    {
        if ($flag == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $flag])->first();
    }
}
