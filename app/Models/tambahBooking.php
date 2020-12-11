<?php

namespace App\Models;

use CodeIgniter\Model;

class tambahBooking extends Model
{
    protected $table = 'booking_kamar';
    protected $primaryKey = 'id_bayar';
    protected $allowedFields = ['id_cust', 'no_kamar', 'check_in', 'check_out'];

    public function getTotalSHT()
    {
        return $this->db->table('booking_kamar')
            ->like('no_kamar', 'SHT')
            ->countAllResults();
    }

    public function getTotalCND()
    {
        return $this->db->table('booking_kamar')
            ->like('no_kamar', 'CND')
            ->countAllResults();
    }

    public function getTotalAll()
    {
        return $this->db->table('booking_kamar')
            ->countAllResults();
    }
}
