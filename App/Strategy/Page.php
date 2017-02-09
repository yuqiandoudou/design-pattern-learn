<?php
namespace App\Strategy;
use Common;
class Page {
    protected $strategy;

    //行为 执行动作
    function show() {
        $this->strategy->showAd(); //对编译器不友好 StrategyShowAd
        $this->strategy->showCategory(); //StrategyShowCategory
    }

    //出入的策略样本对象
    function setStrategy(Common\Strategy $strategy) {
       $this->strategy = $strategy;
    }
}
