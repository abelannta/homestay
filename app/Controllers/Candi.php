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

        return view('/candi/kamar', $data);
    }
    public function save()
    {
        //validasi
        if (!$this->validate([
            'username' => [
                'rules' => 'required|alpha',
                'errors' => [
                    'alpha' => 'username tidak boleh mengandung selain huruf'
                ]
            ],
            'alamat' => [
                'rules' => 'required'
            ],
            'email' => [
                'rules' => 'required'
            ],
            'no_telp' => [
                'rules' => 'required|decimal'
            ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
            ],
            'no_kamar' => [
                'rules' => 'required'
            ],
            'jumlah_hari' => [
                'rules' => 'required'
            ],
            'check_in' => [
                'rules' => 'required|is_unique[booking_kamar.check_in]|is_unique[booking_kamar.check_out]',
                'errors' => [
                    'is_unique' => 'tanggal yang dipilih sudah dibooking orang lain'
                ]
            ]
        ])) {
            return redirect()->to('/Candi/kamar')->withInput();
        }

        // mengambil gambar
        $gambar = $this->request->getFile('gambar');

        // pindahkan file ke folder img
        $gambar->move('img/data_booking/file_user');

        // ambil nama
        $namaGambar = $gambar->getName();

        $PSuhatModel = new \App\Models\PSuhatModel();
        $BookingKamar = new \App\Models\tambahBooking();

        // hitung tanggal checkout
        $checkout = date("Y-m-d", strtotime($this->request->getVar('check_in') . '+' . $this->request->getVar('jumlah_hari') . ' days'));

        // input checkbox multivalue 
        $checkBox = implode(',', $this->request->getVar('no_kamar'));

        // jumlah_hari
        $hari = $this->request->getVar('jumlah_hari');

        // kamar
        $kamar = $this->request->getVar('no_kamar');
        if (isset($_POST['data'])) {
            if ($kamar[0] == "KamarCND2") {
                $byr = 120000 * $hari;
                if (isset($kamar[1]) == "KamarCND3" && $kamar[1] == 'KamarCND3') {
                    $byr += 100000 * $hari;
                    if (isset($kamar[2]) == "KamarCND4" && $kamar[2] == 'KamarCND4') {
                        $byr += 120000 * $hari;
                        if (isset($kamar[3]) == "KamarCND5" && $kamar[3] == 'KamarCND5') {
                            $byr += 90000 * $hari;
                        } else {
                            $byr += 0;
                        }
                    } elseif (isset($kamar[2]) == "KamarCND5" && $kamar[2] == 'KamarCND5') {
                        $byr += 90000 * $hari;
                    } else {
                        $byr += 0;
                    }
                } elseif (isset($kamar[1]) == "KamarCND4" && $kamar[1] == 'KamarCND4') {
                    $byr += 120000 * $hari;
                    if (isset($kamar[2]) == "KamarCND5" && $kamar[2] == 'KamarCND5') {
                        $byr += 90000 * $hari;
                    } else {
                        $byr += 0;
                    }
                } elseif (isset($kamar[1]) == "KamarCND5" && $kamar[1] == 'KamarCND5') {
                    $byr += 90000 * $hari;
                } else {
                    $byr += 0;
                }
            } elseif ($kamar[0] == "KamarCND3") {
                $byr = 100000 * $hari;
                if (isset($kamar[1]) == "KamarCND4" && $kamar[1] == 'KamarCND4') {
                    $byr += 120000 * $hari;
                    if (isset($kamar[2]) == "KamarCND5" && $kamar[2] == 'KamarCND5') {
                        $byr += 90000 * $hari;
                    } else {
                        $byr += 0;
                    }
                } elseif (isset($kamar[1]) == "KamarCND5" && $kamar[1] == 'KamarCND5') {
                    $byr += 90000 * $hari;
                } else {
                    $byr += 0;
                }
            } elseif ($kamar[0] == "KamarCND4") {
                $byr = 120000 * $hari;
                if (isset($kamar[1]) == "KamarCND5" && $kamar[1] == 'KamarCND5') {
                    $byr += 90000 * $hari;
                } else {
                    $byr += 0;
                }
            } else {
                $byr = 90000 * $hari;
            }
        }

        $PSuhatModel->save([
            'id_cust'    => $this->request->getVar('id'),
            'nama'       => $this->request->getVar('username'),
            'email'      => $this->request->getVar('email'),
            'alamat'     => $this->request->getVar('alamat'),
            'no_telp'    => $this->request->getVar('no_telp'),
            'harga'      => $byr,
            'pembayaran' => $this->request->getVar('pembayaran'),
            'gambar'     => $namaGambar
        ]);
        $BookingKamar->save([
            'id_cust'   => $this->request->getVar('id'),
            'no_kamar'  => ('' . $checkBox . ''),
            'check_in'  => $this->request->getVar('check_in'),
            'check_out' => $checkout,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan, cek halaman Bookingku');
        return redirect()->to('/candi/kamar');
    }
}
