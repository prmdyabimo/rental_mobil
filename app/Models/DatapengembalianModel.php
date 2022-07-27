<?php 

namespace App\Models;

use CodeIgniter\Model;

class DatapengembalianModel extends Model
{
  // connect to table database
  protected $table = 'data_pengembalian';
  protected $useTimestamps = true;
  protected $allowedFields = ['terlambat'];
}