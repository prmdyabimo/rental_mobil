<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    { 
        helper(['form']);
        $data = [
          'title' => 'Register'
        ];
        return view('pemilik/register', $data);
    }
    public function save()
    {
        helper(['form']);
        $rules = [
          'name'        => 'required|min_length[3]|max_length[20]',
          'email'       => 'required|min_length[6]|max_length[50]|valid_email|is_unique[pemilik.user_email]',
          'password'    => 'required|min_length[6]|max_length[200]',
          'confpassword'=> 'matches[password]'
        ];
        if (!$this->validate($rules)) {
          $userModel = new UserModel(); 
          $data = [
            'user_name'     => $this->request->getVar('name'),
            'user_email'    => $this->request->getVar('email'),
            'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
          ];
          $userModel->save($data);
          return redirect()->to('/login');
        } else {
          $data['validation'] = $this->validator;
          return view('pemilik/register', $data);
        }
    }
}
