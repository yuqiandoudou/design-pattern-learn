<?php
use Common\Factory;
use App\Strategy;
use App\Event;
define('BASEDIR',__DIR__);

require BASEDIR.'/Common/AutoLoader.php';
spl_autoload_register('\\Common\\AutoLoader::autoload'); //autoload是固定的默认加载方法


/**
 * 工厂模式
 */
$db = Factory::linkDatabase();
echo serialize($db->getLink())."\n";


/**
 * 策略模式 按需加载
 * 将一组特定的行为和算法封装成类，以适应某些特定的上下文的环境
 * 实现Ioc 依赖倒置 控制反转 7-8
 */
$strategyPage = new Strategy\Page();
if (isset($_GET['female'])) {
    $strategy = new Strategy\FemaleUserStrategy();
} else {
    $strategy = new Strategy\MaleUserStrategy();
}

$strategyPage->setStrategy($strategy);
$strategyPage->show();



/**
 * 数据对象映射模式
 * 将对象和数据存储映射起来，对一个对象的操作会映射为对数据存储的操作
 * 实现ORM 需要自己手动填写sql并转化为对象并不高级
 */


/**
 * 观察者模式
 * 当一个对象状态发生 改变时，依赖它的全部对象全部会收到通知，并且自动更新
 */

$event = new Common\Event();
//添加观察者
$event->addObserver(new Event\Observer1());
$event->addObserver(new Event\Observer2());
//时间触发
$event->trigger();


/**
 * 原型模式
 * 用来创建对象
 * 先创建一个原型对象，然后通过clone原型对象来创建新的对象，从而避免初始化操作
 * 与单例模式很像 就不展示了
 */

/**
 * 装饰器模式
 * 可以动态的添加修改类的功能
 */


/**
 * 迭代器模式
 * 不需要了解内部实现的前提下，遍历一个聚合对象的内部元素
 * 聚合(Aggregation) 关系是关联关系的一种，是强的关联关系。聚合是整体和个体之间的关系。
 * 比较有用
 */