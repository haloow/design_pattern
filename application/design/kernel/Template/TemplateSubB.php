<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/6/3
 * Time: 9:42
 */

namespace app\design\kernel\Template;


class TemplateSubB extends TemplateBase
{
    protected  function operationA()
    {
        printf("SubB:operationA<br/>");
    }

    protected function operationB()
    {
        printf("SubB:operationB<br/>");
    }
}