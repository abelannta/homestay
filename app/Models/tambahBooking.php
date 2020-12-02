<?php

namespace App\Models;

use CodeIgniter\Model;

class tambahBooking extends Model
{
    protected $table = 'booking_kamar';
    protected $primaryKey = 'id_bayar';
    protected $allowedFields = ['id_cust', 'no_kamar', 'check_in', 'check_out'];
}
