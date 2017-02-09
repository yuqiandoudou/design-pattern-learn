<?php
/**
 *注册器模式 可以用于配置文件的注册，数据库文件的加载
 */
namespace Common;

class Register {

    protected static $registerObjectTree;

    //注册到注册树中
    public function set($alias, $object) {
           self::$registerObjectTree[$alias] = $object;
    }

    //从注册树中移除
    public function _unset($alias) {
       unset(self::$registerObjectTree[$alias]);
    }

    //从注册数中获取对象
    public function get($name) {
        return self::$registerObjectTree[$name];
    }

}