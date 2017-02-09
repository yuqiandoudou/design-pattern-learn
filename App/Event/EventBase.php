<?php
namespace App\Event;
//我们有时候也把abstract Class叫做base class，因为base class不能直接生成对象
//一旦你在abstract class中声明了一个abstract method，那么所有继承这个class的subclass都必须要去declare这个method，否则，php会报错。
abstract class EventBase {

    protected $observers = [];

    //添加监听事的观察者
    function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    //通知这些观察者
    /**
     * 执行观察者里面的通知
     */
    function notify() {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}