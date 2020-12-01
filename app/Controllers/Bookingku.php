<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Config\Services;

class Bookingku extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Bookingku | Homestay'
        ];
        $PSuhatModel = new \App\Models\PSuhatModel();
        $id = user()->id;
        $data['bayar'] = $PSuhatModel->getBookingku($id);
        return view('bookingku', $data);
    }

    public function upload($id_bayar)
    {
        $PSuhatModel = new \App\Models\PSuhatModel();

        $PSuhatModel->getUpload($id_bayar);
        return redirect()->to('/bookingku');
    }
}
