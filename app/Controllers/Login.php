<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
          'title' => 'Login'
        ];
        return view('pemilik/login', $data);
    }
    public function auth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('user_email', $email)->first();
        if ($data) {
          $pass = $data['user_password'];
          $verify_pass = password_verify($password, $pass);
          if ($verify_pass) {
            $ses_data = [
              'user_id'     => $data['user_id'],
              'user_name'     => $data['user_name'],
              'user_email'     => $data['user_email'],
              'logged_in'     => TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/pemilik');
          } else {
            $session->setFlashdata('msg', 'Wrong Password');
            return redirect()->to('/login');
          }
        } else {
          $session->setFlashdata('msg', 'Email not found');
          return redirect()->to('/login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
