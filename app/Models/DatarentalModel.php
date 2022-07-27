<?php 

namespace App\Models;

use CodeIgniter\Model;

class DatarentalModel extends Model
{
  // connect to table database
  protected $table = 'data_rental';
  protected $useTimestamps = true;
  // protected $allowedFields = ['id_penyewa', 'no_ktp', 'nama_penyewa', 'nama_mobil', 'id_plat_mobil', 'tanggal_rental', 'lama_sewa', 'harga_sewa', 'total_harga_sewa'];
  protected $allowedFields = ['id_penyewa', 'nama_penyewa', 'no_ktp', 'nama_mobil', 'id_plat_mobil', 'tanggal_rental', 'lama_sewa', 'harga_sewa', 'total_harga_sewa'];

}