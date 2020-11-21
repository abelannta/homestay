<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Config\Services;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Admin Homestay'
        ];
        return view('admin\home', $data);
    }

    public function suhat()
    {
        //session();
        $data = [
            'title' => 'Suhat | Admin Homestay',
            'validation' => \Config\Services::validation()
        ];

        $PSuhatModel = new \App\Models\PSuhatModel();
        $data['bayar'] = $PSuhatModel->getBooking();
        return view('admin\suhat', $data);
    }

    public function candi()
    {
        $data = [
            'title' => 'Candi | Admin Homestay'
        ];
        return view('admin\candi', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Admin Homestay',
            'alamat' => [
                [
                    'nama' => 'Homestay Suhat',
                    'alamat' => 'Jl. Soekarno Hatta no.14',
                    'kota' => 'Malang'
                ],
                [
                    'nama' => 'Homestay Candi',
                    'alamat' => 'Jl. Candi no.14',
                    'kota' => 'Malang'
                ]
            ]
        ];
        return view('admin\contact', $data);
    }

    public function detail($id_bayar)
    {
        $PSuhatModel = new \App\Models\PSuhatModel();

        $data = [
            'title' => 'Detail Pembayaran',
            'bayar' => $PSuhatModel->where(['id_bayar' => $id_bayar])->first()
        ];

        if (empty($data['bayar'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('ID_Bayar Tidak Ditemukan.');
        }
        return view('admin/detail', $data);
    }

    public function tambah()
    {
        //validasi
        if (!$this->validate([
            'nama' => 'required|alpha_space',
            'alamat' => 'required',
            'no_telp' => 'required|decimal',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/suhat')->withInput()->with('validation', $validation);
        }

        $PSuhatModel = new \App\Models\PSuhatModel();
        $BookingKamar = new \App\Models\tambahBooking();

        $PSuhatModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp'),
            'pembayaran' => $this->request->getVar('pembayaran'),
            'kupon' => $this->request->getVar('kupon'),
            'status' => $this->request->getVar('status')
        ]);

        $BookingKamar->save([
            'no_kamar' => $this->request->getVar('no_kamar'),
            'check_in' => $this->request->getVar('check_in'),
            'check_out' => $this->request->getVar('check_out')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/admin/suhat');
    }

    public function delete($id_bayar)
    {
        $PSuhatModel = new \App\Models\PSuhatModel();
        $BookingKamar = new \App\Models\tambahBooking();

        $PSuhatModel->delete($id_bayar);
        $BookingKamar->delete($id_bayar);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/suhat');
    }

    public function verifikasi($id_bayar)
    {
        $PSuhatModel = new \App\Models\PSuhatModel();

        $PSuhatModel->getVerif($id_bayar);
        return redirect()->to('/admin/suhat');
    }

    public function checkout($id_bayar)
    {
        $PSuhatModel = new \App\Models\PSuhatModel();

        $PSuhatModel->getCheckout($id_bayar);
        return redirect()->to('/admin/suhat');
    }

    public function riwayat()
    {
        //session();
        $data = [
            'title' => 'Suhat | Admin Homestay',
            'validation' => \Config\Services::validation()
        ];

        $PSuhatModel = new \App\Models\PSuhatModel();
        $data['bayar'] = $PSuhatModel->getSelesai();
        return view('admin\riwayat', $data);
    }

    public function logs()
    {
    }
}
