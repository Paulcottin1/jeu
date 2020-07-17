<?php
namespace App\controller;
use App\manager\PostManager;
use App\manager\CommentManager;
use App\manager\UserManager;

Class FrontendController 
{

    public function home() 
    {
        $manager = new PostManager();
        $posts = $manager->getPosts(4);
        $template = 'home';
        $title = 'Accueil';
        require('view/frontend/template.php');
    }
    
    /**
     * Render blog page
     * @param  int $limite
     * @return
     */
    public function listPosts($limite)
    {   
        $manager = new PostManager();
        $numberPages = ceil($manager->countPost() / $limite);
        $posts = $manager->getPosts($limite);
        $paging = '/blog';
        $title = 'Mon blog';
        $template = 'listPostsView';
        require('view/frontend/template.php');
    }
}