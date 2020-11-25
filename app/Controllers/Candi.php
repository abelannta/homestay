<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Config\Services;

class Candi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Candi | Homestay'
        ];
        return view('candi\home', $data);
    }

    public function kamar()
    {
        $data = [
            'title' => 'Kamar Candi | Homestay',
            'validation' => \Config\Services::validation()
        ];
        return view('candi\kamar', $data);
    }
}
