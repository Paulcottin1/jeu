<?php
session_start();
require_once('vendor/autoload.php');
use App\controller\FrontendController;

if (isset($_GET['action'])) {
    $controller = new FrontendController();

    if($_GET['action'] == 'create') {
        $controller->create();
    }
    elseif($_GET['action'] == 'home') {
        $controller->home();
    }
    elseif($_GET['action'] == 'join') {
        $controller->join($_POST['pin']);
    }
} 
 else {
    $controller = new FrontendController();
    $controller->home();
} 
