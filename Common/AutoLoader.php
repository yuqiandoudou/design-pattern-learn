<?php
/**
 * Created by PhpStorm.
 * User: caoxiang
 * Date: 16/9/29
 * Time: 上午11:51
 */
namespace Common;

class AutoLoader {

    static function autoload($class) {
       require  BASEDIR.'/'.str_replace("\\",'/',$class).'.php';
    }

    public static function caoxiang() {
        //echo 's';
    }
}