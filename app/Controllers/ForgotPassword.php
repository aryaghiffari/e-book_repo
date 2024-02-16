<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class ForgotPassword extends Controller
{
    protected $usermodel;
    public function __construct()
    {
        helper('form');
        $this->usermodel = new UserModel();
    }
    public function index()
    {
        return view('auth/forgot');
    }

    public function sendResetLink()
    {
        $email = $this->request->getPost('email');

        // Validate email
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email'
        ]);

        if (!$validation->run(['email' => $email])) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($email);

        if ($user) {
            // Generate and send reset link
            // Implement your logic here
            return redirect()->to(base_url('auth/forgot'))->with('success', 'Reset link has been sent to your email.');
        } else {
            return redirect()->to(base_url('auth/forgot'))->with('error', 'Email not found.');
        }
    }
}
