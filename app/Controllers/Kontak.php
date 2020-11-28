<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Config\Services;

class Kontak extends BaseController
{
    public function tambah()
    {
        $KontakModel = new \App\Models\KontakModel();

        $KontakModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'pesan' => $this->request->getVar('pesan'),
        ]);

        return redirect()->to('/home');
    }
}
