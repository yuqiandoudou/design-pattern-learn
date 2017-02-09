<?php
namespace App\Event;

class Observer1 implements Observer {

    public function update($eventInfo = null) {
        echo "1.时间通知机制          \n";
    }
}