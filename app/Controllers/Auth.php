<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    protected $authmodel;
    public function __construct()
    {
        helper('form');
        $this->authmodel = new AuthModel();
    }
    public function register()
    {
        $data = array(
            'title' => 'Register',

        );
        if (session('username')) {
            return redirect()->to(base_url('pages/dashboard'));
        }
        return view('auth/register', $data);
    }
    public function save_register()
    {
        if ($this->validate([
            'username' => [
                'label' => 'username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'password' => [
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'email' => [
                'label' => 'email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'confirm' => [
                'label' => 'password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!',
                    'matches' => 'Password tidak sama!'
                ]
            ]

        ])) {
            $data = [
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            // Panggil fungsi untuk menyimpan data ke dalam database
            $this->authmodel->save_register($data);

            // Tampilkan pesan berhasil dan redirect
            session()->setFlashdata('success', 'Berhasil mendaftar! Silakan login.');
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('register'));
        }
    }
    public function login()
    {
        $data = array(
            'title' => 'login',

        );
        if (session('username')) {
            return redirect()->to(base_url('pages/dashboard'));
        }
        return view('auth/login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'password' => [
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ]
        ])) {
            $username = $this->request->getPost('username');
            $password = $this->request->getVar('password');

            // Ambil data pengguna dari database berdasarkan username
            $userData = $this->authmodel->login($username, $password);

            if ($userData) {
                // Jika password sesuai
                session()->set('log', true);
                session()->set('username', $userData['username']);
                session()->set('email', $userData['email']);
                session()->set('role', $userData['role']);
                session()->set('foto', $userData['foto']);
                // Tidak perlu menyimpan password dalam session, jadi dihapus
                unset($userData['password']);

                // Login berhasil
                return redirect()->to(base_url('pages/dashboard'));
            } else {
                // Jika data tidak cocok atau password tidak sesuai
                session()->setFlashdata('pesan', 'Username atau Password tidak cocok!');
                return redirect()->to(base_url('login'));
            }
        } else {
            // Jika validasi gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('login'));
        }
    }



    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('email');
        session()->remove('password');
        session()->remove('role');
        session()->remove('foto');

        session()->setFlashdata('pesan', 'Berhasil Logout!');
        return redirect()->to(base_url('login'));
    }
}
