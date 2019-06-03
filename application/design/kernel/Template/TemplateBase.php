<?php

/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/6/3
 * Time: 9:39
 */
namespace app\design\kernel\Template;

abstract class TemplateBase
{
    protected abstract function operationA();
    protected abstract function operationB();

    public function templateMethod()
    {
        printf("base handle<br/>");
        $this->operationA();
        $this->operationB();
    }
}