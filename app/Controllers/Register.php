<?php

namespace App\Controllers;

use App\Models\M_user;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Form Register',
            'tampil' => 'login',
        ];
        echo view('user/register', $data);
    }
    public function regis()
    {
        $userData = new M_user();

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $session = session();
        session()->setFlashdata('message', 'Account Has Been Created !');
        $userData->insert($_POST);
        return redirect()->to(base_url());
    }
}
