<?php

/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/14
 * Time: 18:38
 */
namespace app\design\controller;

use app\design\kernel\AbstractFactory\DellFactory;
use app\design\kernel\AbstractFactory\HpFactory;
use app\design\kernel\Builder\FatBuilder;
use app\design\kernel\Builder\PersonDirector;
use app\design\kernel\Builder\ThinBuilder;
use app\design\kernel\Observer\Colleague;
use app\design\kernel\Decorator\ConcreteComponent;
use app\design\kernel\Decorator\ConcreteDecoratorA;
use app\design\kernel\Decorator\ConcreteDecoratorB;

use app\design\kernel\Facade\Facade;
use app\design\kernel\Factory\FactoryA;
use app\design\kernel\Factory\FactoryB;
use app\design\kernel\Observer\Secretary;
use app\design\kernel\Prototype\Resume;
use app\design\kernel\Proxys\Boy;
use app\design\kernel\Proxys\Girl;
use app\design\kernel\Proxys\Proxy;

use app\design\kernel\SimpleFactory\SimpleFactory;
use app\design\kernel\Template\TemplateSubA;
use app\design\kernel\Template\TemplateSubB;
use app\design\kernel\Strategy\Context;
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

    public function simpleFactory()
    {
        $oper = SimpleFactory::createOperation('-');
        $oper->numA = 10;
        $oper->numB = 2;
        printf($oper->getResult());
    }

    public function strategy()
    {
        $context = new Context('A');
        echo $context->execStrategy().'<br/>';
        $context = new Context('B');
        echo $context->execStrategy().'<br/>';
        $context = new Context('C');
        echo $context->execStrategy().'<br/>';
    }

    public function builder()
    {
        $director = new PersonDirector(new ThinBuilder());
        $director->createPerson();

        $director = new PersonDirector(new FatBuilder());
        $director->createPerson();
    }

    public function observer()
    {
        $secretary = new Secretary();
        $gupiao = new Colleague('gupiao',$secretary);
        $nba = new Colleague('nba',$secretary);
        $secretary->attach($gupiao);
        $secretary->attach($nba);
        $secretary->detach($gupiao);
        $secretary->setSubjectState('老板回来了');
        $secretary->notify();
    }

    public function reflex()
    {
        $class = new \ReflectionClass("app\design\kernel\Observer\Secretary");
        $instance = $class->newInstance();
        echo $instance->sayHello();
    }

    #反射改进后的抽象工厂
    public function abstractFactory()
    {
        $className = "app\design\kernel\AbstractFactory\DellFactory";  //此处可用配置文件代替
        $class = new \ReflectionClass($className);
        $factory = $class->newInstance();
        $keyBoard = $factory->makeKeyBoard();
        $mouse = $factory->makeMouse();
        $mic = $factory->makeMic();

        echo $keyBoard->getInfo().'<br>';
        echo $mouse->getInfo().'<br>';
        echo $mic->getInfo();
    }
}