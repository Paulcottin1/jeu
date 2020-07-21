<?php
namespace App\manager;

Abstract Class AbstractManager
{    
    /**
     * connection database
     * @return $db
     */
    public function dbConnect()
    {
        try
        {
            $db = new \PDO('mysql:host=localhost;dbname=jeu;charset=utf8', 'root', 'root');
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
    }
    }
}