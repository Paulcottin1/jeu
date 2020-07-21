<?php
namespace App\manager;
use App\entity\Room;

Class RoomManager extends AbstractManager {

    public function join($pin)
    {
        $room = new Room();
        echo $pin;
    }

    public function create()
    {
        $room = new Room();
        echo 'create';
    }

}