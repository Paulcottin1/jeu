<?php
session_start();
require_once('vendor/autoload.php');
use App\controller\FrontendController;

if (isset($_GET['action'])) {
    $controller = new FrontendController();

    if($_GET['action'] == 'blog') {
        $controller = new FrontendController();
        $controller->listPosts(8);
    }
} 
 else {
    $controller = new FrontendController();
    $controller->home();
} 
