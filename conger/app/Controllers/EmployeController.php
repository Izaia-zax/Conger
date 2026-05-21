<?php
namespace App\Controllers;

class EmployeController extends BaseController{

    public function index(){
         return view('emp/dashboard');
    }
}
