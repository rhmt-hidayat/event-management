<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        if(session()->get('email_user')) {
            return redirect()->to(site_url('home'));
        }
        return view('auth/login');
    }

    public function login()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['email_user' => $post['email']]);
        $user = $query->getRow();
        if ($user) {
            if (password_verify($post['password'], $user->password_user)) {
                $params = [
                    'id_user' => $user->id_user,
                    'email_user' => $user->email_user
                ];
                session()->set($params);
                return redirect()->to(site_url('home'));
            } else {
                return redirect()->to('login')->with('error', 'Password salah');
            }
        } else {
            return redirect()->to('login')->with('error', 'Email belum terdaftar');
        }
    }

    public function logout()
    {
        // session()->remove('email_user');
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}
