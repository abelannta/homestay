<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Config\Services;

class Admin extends BaseController
{
    public function index()
    {

        $tambahBooking = new \App\Models\tambahBooking();
        $data = [
            'title' => 'Home | Admin Homestay',
            'totalSHT' => $tambahBooking->getTotalSHT(),
            'totalCND' => $tambahBooking->getTotalCND(),
            'totalAll' => $tambahBooking->getTotalAll()
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
        //session();
        $data = [
            'title' => 'Candi | Admin Homestay',
            'validation' => \Config\Services::validation()
        ];

        $PSuhatModel = new \App\Models\PSuhatModel();
        $data['bayar'] = $PSuhatModel->getBookingCND();
        return view('admin\candi', $data);
    }

    public function contact()
    {
        $Kontak = new \App\Models\KontakModel();
        $data = [
            'title' => 'Keluhan | Admin Homestay',
            'kontak' => $Kontak->findAll()
        ];



        return view('/admin/contact', $data);
    }

    public function logs()
    {
        $data = [
            'title' => 'Logs | Admin Homestay'
        ];
        return view('admin\logs', $data);
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

    public function tambahCND()
    {
        //validasi
        if (!$this->validate([
            'username' => [
                'rules' => 'required'
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
            'check_in' => [
                'rules' => 'required|is_unique[booking_kamar.check_in]|is_unique[booking_kamar.check_out]',
                'errors' => [
                    'is_unique' => 'tanggal yang dipilih sudah dibooking orang lain'
                ]
            ]
        ])) {
            return redirect()->to('/admin/candi')->withInput();
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
        return redirect()->to('/admin/candi');
    }

    public function delete($id_bayar)
    {
        $PSuhatModel = new \App\Models\PSuhatModel();
        $BookingKamar = new \App\Models\tambahBooking();

        $PSuhatModel->delete($id_bayar);
        $BookingKamar->delete($id_bayar);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin');
    }

    public function verifikasi($id_bayar)
    {
        $PSuhatModel = new \App\Models\PSuhatModel();

        $PSuhatModel->getVerif($id_bayar);
        return redirect()->to('/admin');
    }

    public function checkout($id_bayar)
    {
        $PSuhatModel = new \App\Models\PSuhatModel();

        $PSuhatModel->getCheckout($id_bayar);
        return redirect()->to('/admin');
    }

    public function riwayat()
    {
        //session();
        $data = [
            'title' => 'Suhat | Admin Homestay',
        ];
        $PSuhatModel = new \App\Models\PSuhatModel();
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $query = $PSuhatModel->getSearch($keyword);
        } else {
            $query = $PSuhatModel->getSelesai();
        }


        $data['bayar'] = $query;
        return view('admin\riwayat', $data);
    }

    public function riwayatCND()
    {
        //session();
        $data = [
            'title' => 'Suhat | Admin Homestay',
        ];
        $PSuhatModel = new \App\Models\PSuhatModel();
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $query = $PSuhatModel->getSearchCND($keyword);
        } else {
            $query = $PSuhatModel->getSelesaiCND();
        }


        $data['bayar'] = $query;
        return view('admin\riwayatCND', $data);
    }

    public function print()
    {
        $data = [
            'title' => 'Print | Admin Homestay'
        ];

        $PSuhatModel = new \App\Models\PSuhatModel();
        $data['bayar'] = $PSuhatModel->getBooking();

        return view('/admin/print', $data);
    }

    public function printCND()
    {
        $data = [
            'title' => 'Print | Admin Homestay'
        ];

        $PSuhatModel = new \App\Models\PSuhatModel();
        $data['bayar'] = $PSuhatModel->getBookingCND();

        return view('/admin/print', $data);
    }
}
