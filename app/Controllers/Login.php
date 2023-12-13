<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->loginmodel = new LoginModel();
    }

    public function register()
    {
        $username = $this->request->getVar('username');
        $nama_lengkap = $this->request->getVar('nama_lengkap');
        $email = $this->request->getVar('email');
        $no_telephone = $this->request->getVar('no_telephone');
        $password = $this->request->getVar('password');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'no_telephone' => $no_telephone,
            'password' => $password,
            'kode_user' => 225,
            'hashed_password' => $hashedPassword
        ];

        $this->loginmodel->insert($data);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Registration successful!']);
    }

    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->loginmodel->where('email', $email)->first();
        // dd($user);

        if ($user) {
            if (password_verify($password, $user['hashed_password'])) {
                $userData = [
                    'username' => $user['username'],
                    'nama_lengkap' => $user['nama_lengkap'],
                    'email' => $user['email'],
                    'no_telephone' => $user['no_telephone'],
                    'kode_user' => $user['kode_user'],
                ];

                session()->set($userData);

                return $this->response->setJSON(['status' => 'success', 'message' => 'Login successful!']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid password.']);
            }
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'User not found.']);
        }
    }

    public function logout()
    {
        $data = [
            'title' => 'Log Out'
        ];
        session()->destroy();

        return view('pages/home', $data);
    }
}
