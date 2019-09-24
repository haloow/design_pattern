<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/24
 * Time: 10:55
 */

namespace app\design\kernel\Observer;

abstract class Observer
{
    protected $name;
    protected $subject;

    public function __construct($name, Subject $subject)
    {
        $this->name = $name;
        $this->subject = $subject;
    }

    abstract public function update();
}