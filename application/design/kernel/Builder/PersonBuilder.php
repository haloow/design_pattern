<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/24 0024
 * Time: 13:21
 */

namespace app\design\kernel\Builder;

abstract class PersonBuilder
{
    public abstract function buildHead();
    public abstract function buildBody();
    public abstract function buildLeftArm();
    public abstract function buildRightArm();
    public abstract function buildLeftLeg();
    public abstract function buildRightLeg();
}