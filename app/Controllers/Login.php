<?php

namespace App\Controllers;

use App\Models\M_user;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Form Login',
            'tampil' => 'login',
        ];
        echo view('user/login', $data);
    }

    public function validateLogin()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
            ],
            'password' => [
                'rules' => 'required'
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('Home'))->withInput()->with('validation', $validation);
        }

        // $this->_checkLogin();
        $db      = \Config\Database::connect();
        $builder = $db->table('user');
        $email =  $this->mRequest->getVar('email');
        $password = $this->mRequest->getVar('password');
        $query = $builder->getWhere(['email' => $email])->getRowArray();
        // dd($query['is_active']);
        // jika ada user nya 
        if ($query) {
            // cek password 
            if ($password == $query['password']) {
                $data = [
                    'email' => $query['email'],
                    'username' => $query['username'],
                    'login' => true,
                ];
                session()->set($data);
                return redirect()->to(base_url('Home'));
            } else {
                session()->setFlashdata('pesan', 'Wrong password!');
                return redirect()->to(base_url())->withInput();
            }
        } else {
            session()->setFlashdata('pesan', 'Email is not registred !');
            return redirect()->to(base_url())->withInput();
        }
    }
    public function logout()
    {
        session()->remove('email');
        session()->setFlashdata('pesan', 'You has been logout');
        return redirect()->to(base_url());
    }
}
