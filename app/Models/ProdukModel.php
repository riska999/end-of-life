<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama_produk', 'manufaktur', 'durasi_lisensi', 'nomor_lisensi', 'instalasi_pertama', 'tanggal_kadaluarsa', 'created_at', 'pengingat'];
}
