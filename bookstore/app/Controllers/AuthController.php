<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class AuthController extends BaseController
{
    // Menampilkan halaman login
    public function login()
    {
        $session = session();

        // Proses login jika ada permintaan POST
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // Cek login
            $auth = Services::auth();
            if ($auth->login($email, $password)) {
                return redirect()->to('/dashboard');  // Redirect ke halaman dashboard
            } else {
                $session->setFlashdata('error', 'Email atau password salah');
                return redirect()->back();
            }
        }

        // Menampilkan form login
        return view('auth/login');
    }

    // Logout pengguna
    public function logout()
    {
        $auth = Services::auth();
        $auth->logout();  // Logout pengguna
        return redirect()->to('/login');  // Redirect ke halaman login
    }
}
