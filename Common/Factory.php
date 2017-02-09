<?php
/**
 * 工厂模式
 */
namespace Common;

class Factory {

    public static function linkDatabase() {
        $db = Database::getInstance();
        return $db;
    }
}