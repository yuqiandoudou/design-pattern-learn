<?php
namespace App\Event;

interface Observer {
    function update($eventInfo = null);
}