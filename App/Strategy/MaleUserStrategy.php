<?php
namespace App\Strategy;
use Common\Strategy;

class MaleUserStrategy implements Strategy {
    function showAd() {
        echo "t \n";
    }

    function showCategory() {
        echo "y \n";
    }
}