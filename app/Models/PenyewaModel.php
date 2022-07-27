<?php 

namespace App\Models;

use CodeIgniter\Model;

class PenyewaModel extends Model
{
  // connect to table database
  protected $table = 'penyewa';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama_penyewa', 'no_ktp', 'alamat'];
}