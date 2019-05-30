<?php

/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/14
 * Time: 18:38
 */
namespace app\design\controller;
use \Decorator\ConcreteComponent;
use \Decorator\ConcreteDecoratorA;
use \Decorator\ConcreteDecoratorB;

use Factory\FactoryA;
use Factory\FactoryB;
use Prototype\Resume;
use Proxys\Boy;
use Proxys\Girl;
use Proxys\Proxy;
use think\Controller;

class DesignDriver extends Controller
{
    public function index()
    {
        echo "index";
    }

    public function decorator()
    {
    	$person = new ConcreteComponent();
    	$d_first = new ConcreteDecoratorA();
    	$d_second = new ConcreteDecoratorB();

    	$d_first->setComponent($person);
    	$d_second->setComponent($d_first);
    	$d_second->operation();
    }

    public function iGirl()
    {
        $boy = new Boy();
        $girl = new Girl("Lily");
        $boy->setGirl($girl);
        $proxy = new Proxy($boy);

        $proxy->giveMoney();
        $proxy->giveDolls();
        $proxy->giveFlowers();
    }

    public function iFactory()
    {
        $factory = new FactoryA();
        $product = $factory->createFactory();
        $product->getVersion();

        $factory = new FactoryB();
        $product = $factory->createFactory();
        $product->getVersion();
    }

    public function iPrototype()
    {
        $a = new Resume("大鸟");
        $a->setPersonalInfo('男','25岁');
        $a->setExperience("2008-2016","A");

        $b = $a->clone();
        $b->setExperience("2006-2010","B"); //如果设置了__clone 会覆盖__clone的设置

        $c = $a->clone();
//        $c->setExperience("2008-2010","C");

        $a->disPlay();
        $b->disPlay();
        $c->disPlay();
    }
}