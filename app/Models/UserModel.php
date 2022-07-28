<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  // connect to table database
  protected $table = 'pemilik';
  protected $useTimestamps = true;
  protected $allowedFields = ['user_id', 'user_name', 'user_email', 'user_password'];
}