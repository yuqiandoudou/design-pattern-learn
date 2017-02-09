<?php
/**
 * 观察者模式
 */
namespace Common;

use App\Event\EventBase;

class Event extends EventBase {

    public  function trigger() {
        $this->notify();
    }
}
