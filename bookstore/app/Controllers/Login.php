<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        // Menampilkan halaman login
        return view('login');  // Pastikan ada view 'login' di app/Views/
    }

    public function autentikasi()
    {
        // Proses login atau autentikasi
    }
}
