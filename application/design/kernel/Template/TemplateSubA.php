<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/6/3
 * Time: 9:42
 */

namespace app\design\kernel\Template;


class TemplateSubA extends TemplateBase
{
    protected  function operationA()
    {
        printf("SubA:operationA<br/>");
    }

    protected function operationB()
    {
        printf("SubA:operationB<br/>");
    }
}