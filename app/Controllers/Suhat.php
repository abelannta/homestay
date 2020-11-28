<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Config\Services;

class Suhat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Suhat | Homestay'
        ];
        return view('suhat\home', $data);
    }

    public function kamar()
    {
        $data = [
            'title' => 'Kamar Suhat | Homestay',
            'validation' => \Config\Services::validation()
        ];
        return view('suhat\kamar', $data);
    }

    public function tambah()
    {
        //validasi
        if (!$this->validate([
            'nama'      => 'required|alpha_space',
            'alamat'    => 'required',
            'no_telp'   => 'required|decimal',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/suhat/bayar')->withInput()->with('validation', $validation);
        }

        $PSuhatModel = new \App\Models\PSuhatModel();
        $BookingKamar = new \App\Models\tambahBooking();

        $PSuhatModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp'),
            'pembayaran' => $this->request->getVar('pembayaran'),
            'status' => $this->request->getVar('status')
        ]);

        $BookingKamar->save([
            'no_kamar' => $this->request->getVar('no_kamar'),
            'check_in' => $this->request->getVar('check_in'),
            'check_out' => $this->request->getVar('check_out')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/suhat/kamar');
    }
}
