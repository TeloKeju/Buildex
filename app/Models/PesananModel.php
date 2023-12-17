<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama', 'nik', 'no_telp', 'alamat', 'tanggal_pembangunan', 'contractor', 'housePrice', 'luasBangunan', 'luasTanah',
        'fitur1', 'fitur2', 'fitur3', 'description1', 'description2',
        'description3', 'description4', 'title', 'email', 'start', 'accept', 'done'
    ];

    public function updateStatus($orderId, $status)
    {
        $this->where('id', $orderId)->set('accept', $status)->update();
    }

    public function updateStart($orderId, $status)
    {
        $this->where('id', $orderId)->set('start', $status)->update();
    }

    public function updateDone($orderId, $status)
    {
        $this->where('id', $orderId)->set('done', $status)->update();
    }
}
