<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $user;
    public function index()
    {
        //
    }

    function __construct()
    {
        helper('form');
        $this->user = new UserModel();
    }

    // FUNCTION LOGIN EKSEKUSI HASIL DARI FORM_OPEN = LOGIN DI PAGE LOGIN
    public function login()
    {
    if ($this->request->getPost()) {
        $rules = [
            'username' => 'required|min_length[6]',
            'password' => 'required|min_length[7]|numeric',
        ];

        if ($this->validate($rules)) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = $this->user->where(['username' => $username])->first();

            if ($dataUser) {
                if (password_verify($password, $dataUser['password'])) {
                    session()->set([
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
                        'isLoggedIn' => TRUE
                    ]);

                    //Arahkan sesuai role
                    if ($dataUser['role'] == 'admin') {
                        return redirect()->to(base_url('admin'));
                    } else {
                        return redirect()->to(base_url('/'));// '/' mengarah ke -> home
                    }
                } else {

                    // YANG MENAMPILKAN ALERT DI LOGIN APABILA SALAH 
                    session()->setFlashdata('failed', 'Kombinasi Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('failed', $this->validator->listErrors());
            return redirect()->back();
        }
    }

    return view('login');
} 

    public function logout()
    {
    session()->destroy();
    return redirect()->to('/');
    }
}
