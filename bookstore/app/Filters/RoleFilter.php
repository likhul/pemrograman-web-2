<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = Services::auth();
        if (!$auth->check()) {
            // Jika pengguna tidak login, arahkan ke halaman login
            return redirect()->to('/login');
        }

        $role = $auth->user()->role;  // Mendapatkan peran pengguna
        if ($role != 'admin') {
            // Jika bukan admin, arahkan ke halaman 'no access'
            return redirect()->to('/no-access');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada yang perlu dilakukan setelah request
    }
}
