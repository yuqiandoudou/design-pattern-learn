<?php
/**
 * 单例模式
 */
namespace Common;

class Database {
    private static $db;

    //表示外部不可以直接初始化对象
    private function __construct() {}

    //单例模式的入口
    public static function getInstance() {
       if (self::$db) {
           return self::$db;
       } else {
           self::$db = new self();
           return self::$db;
       }
    }



    public function getLink() {
        return self::$db;
    }

}