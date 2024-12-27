<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class Auth extends Controller
{
    public function logout()
    {
        $auth = Services::auth(); // Layanan autentikasi
        $auth->logout();  // Logout pengguna
        return redirect()->to('/login');  // Redirect ke halaman login
    }
}
