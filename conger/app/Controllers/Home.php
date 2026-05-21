<?php

namespace App\Controllers;

use App\Models\EmployeModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }


    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $employeModel = new EmployeModel();

        if (empty($email) || empty($password)) {
            return redirect()->back()
                ->with('error', 'Email ou mot de passe manquant');
        }

        $employe = $employeModel->findByEmail($email);

        if (!$employe) {
            return redirect()->back()
                ->with('error', 'Email incorrect');
        }

        if (!password_verify($password, $employe['password'])) {
            return redirect()->back()
                ->with('error', 'Mot de passe incorrect');
        }

        if (!$employe['actif']) {
            return redirect()->back()
                ->with('error', 'Compte desactiver');
        }

        session()->set([
            'employe_id' => $employe['id'],
            'nom'        => $employe['nom'],
            'prenom'     => $employe['prenom'],
            'email'      => $employe['email'],
            'role'       => $employe['role'],
        ]);

        return view('emp/dashboard');
    }
}
