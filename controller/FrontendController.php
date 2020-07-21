<?php
namespace App\controller;
use App\manager\PostManager;
use App\manager\RoomManager;

Class FrontendController 
{
    public function home() 
    {
        $template = 'home';
        $title = 'Accueil';
        require('view/frontend/template.php');
    }

    public function create()
    {   
        $manager = new RoomManager;
        $manager->create();
        $title = 'Création room';
        $template = 'create';
        require('view/frontend/template.php');
    }

    public function join($pin)
    {
        if(!empty($pin)) {
            $manager = new RoomManager;
            $manager->join($pin);
            $title = 'Rejoindre une room';
            $template = 'join';
            require('view/frontend/template.php');
        } else {
            $this->home();
            $_SESSION['message'] = "Aucun PIN n'est entré";
        }

    }
}