<?php

namespace App\Controllers;

use App\Models\PSuhatModel;
use CodeIgniter\HTTP\Request;
use Config\Services;

class Bookingku extends BaseController
{
    protected $PSuhatModel;
    public function __construct()
    {
        $this->PSuhatModel = new PSuhatModel();
    }
    public function index()
    {
        $id = user()->id;
        $data = [
            'title' => 'Bookingku | Homestay',
            'bayar' => $this->PSuhatModel->getBookingku($id)
        ];
        return view('bookingku', $data);
    }

    public function upload($id_bayar)
    {
        $data = [
            'title' => 'Form Upload Bukti',
            'bayar' => $this->PSuhatModel->getData($id_bayar),
            'validation' => \Config\Services::validation()
        ];

        return view('upload', $data);
    }

    public function update($id_bayar)
    {
        // ambil gambar
        $bukti = $this->request->getFile('bukti');

        // ambil nama
        $namaBukti = $bukti->getName();

        // pindahkan file ke folder img
        $bukti->move('img/data_booking/bukti', $namaBukti);

        $angka = $this->request->getVar('id_bayar');
        $this->PSuhatModel->save([
            'id_bayar' => $id_bayar,
            'bukti' => $namaBukti
        ]);

        // $this->PSuhatModel->getUpload($id_bayar);
        return redirect()->to('/bookingku');
    }
}
