<?php

namespace App\Models;

use CodeIgniter\Model;

class PSuhatModel extends Model
{
    protected $table = 'bayar';
    protected $primaryKey = 'id_bayar';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_cust', 'nama', 'alamat', 'email', 'no_telp', 'gambar', 'harga', 'pembayaran', 'bukti', 'status'];

    public function getBooking()
    {
        return $this->db->table('bayar')
            ->join('booking_kamar', 'bayar.id_bayar=booking_kamar.id_bayar')
            ->where('bayar.kondisi', "Booking")
            ->get()->getResultArray();
    }

    public function getBookingku($id)
    {
        return $this->db->table('bayar')
            ->select('*')
            ->join('booking_kamar', 'bayar.id_bayar=booking_kamar.id_bayar')
            ->where('bayar.id_cust', $id)
            ->get()->getResultArray();
    }

    public function getData($id_bayar)
    {
        return $this->where(['id_bayar' => $id_bayar])->first();
    }

    public function getSelesai()
    {
        return $this->db->table('bayar')
            ->join('booking_kamar', 'bayar.id_bayar=booking_kamar.id_bayar')
            ->where('bayar.kondisi', "Selesai")
            ->get()->getResultArray();
    }

    public function getSearch($keyword)
    {
        return $this->db->table('bayar')
            ->join('booking_kamar', 'bayar.id_bayar=booking_kamar.id_bayar')
            ->where('bayar.kondisi', "Selesai")
            ->like('nama', $keyword)
            ->get()->getResultArray();
    }

    public function getIdByr($id_bayar = false)
    {
        if ($id_bayar == false) {
            return $this->getBooking();
        }

        return $this->where(['id_bayar' => $id_bayar])->first();
    }

    public function getVerif($id_bayar)
    {
        $data = [
            'status' => 'Dibayar'
        ];
        return $this->db->table('bayar')
            ->where('id_bayar', $id_bayar)
            ->update($data);
    }
}
