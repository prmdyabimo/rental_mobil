<?php 

namespace App\Models;

use CodeIgniter\Model;

class PemilikModel extends Model
{
  // connect to table database
  protected $table = 'mobil';
  protected $useTimestamps = true;
  protected $allowedFields = ['id_plat_mobil', 'nama_mobil', 'jenis_mobil', 'harga_sewa', 'tahun_produksi'];
}