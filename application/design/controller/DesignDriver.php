<?php

/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/14
 * Time: 18:38
 */
namespace app\design\controller;

use app\design\kernel\Decorator\ConcreteComponent;
use app\design\kernel\Decorator\ConcreteDecoratorA;
use app\design\kernel\Decorator\ConcreteDecoratorB;

use app\design\kernel\Facade\Facade;
use app\design\kernel\Factory\FactoryA;
use app\design\kernel\Factory\FactoryB;
use app\design\kernel\Prototype\Resume;
use app\design\kernel\Proxys\Boy;
use app\design\kernel\Proxys\Girl;
use app\design\kernel\Proxys\Proxy;

use app\design\kernel\Template\TemplateSubA;
use app\design\kernel\Template\TemplateSubB;
use think\Controller;

class DesignDriver extends Controller
{
    public function index()
    {
        echo "design pattern exercise";
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

    public function templateMethod()
    {
        $a = new TemplateSubA();
        $a->templateMethod();

        $b = new TemplateSubB();
        $b->templateMethod();
    }

    public function facade()
    {
        $facade = new Facade();
        $facade->methodOne();
    }
}