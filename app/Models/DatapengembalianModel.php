<?php 

namespace App\Models;

use CodeIgniter\Model;

class DatapengembalianModel extends Model
{
  // connect to table database
  protected $table = 'data_pengembalian';
  protected $useTimestamps = true;
  protected $allowedFields = ['id_pengembalian', 'id_penyewa', 'nama_penyewa', 'no_ktp', 'nama_mobil', 'id_plat_mobil', 'tanggal_rental', 'tanggal_kembali', 'terlambat', 'denda'];
}