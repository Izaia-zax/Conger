<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }


    public function login(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    }
}
