<?php
namespace App\entity;

Class Room {

    protected $id;
    protected $players = [];
    protected $round;

    public function setId(int $id) : object
    {
        $this->id = $id;
        return $this;
    }   

    public function getId() : string
    {
        return $this->id;
    }

    public function setPlayers(array $players) : object
    {
        $this->players = $players;
        return $this;
    }  

    public function getPlayers() : array
    {
        return $this->players;
    }  

    public function setRound(int $round) : object
    {
        $this->round = $round;
        return $this;
    }  

    public function getRound() : int 
    {
        return $this->round;
    }  
}