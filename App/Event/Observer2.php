<?php
namespace App\Event;

class Observer2 implements Observer {

    public function update($eventInfo = null) {
        echo "2.时间通知机制          \n";
    }
}