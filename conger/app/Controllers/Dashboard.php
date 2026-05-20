<?php
    namespace App\Controllers;

    class Dashboard extends BaseController{
        public function index(){
            if ($redirect = $this->requireLogin()) {
                return $redirect;
            }
            return $this->render('dashboard',['title' => 'Tableau de bord']);
        }

        public function profile($id){
            return "Profile d'utilisateur " .$id;
        }
    }
?>