<?php
namespace App\Strategy;
use Common\Strategy;

class FemaleUserStrategy implements Strategy {

    function showAd() {
      echo "s \n";
    }

    function showCategory() {
     echo "d \n";
    }
}