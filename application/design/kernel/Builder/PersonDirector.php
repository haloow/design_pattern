<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/24 0024
 * Time: 13:30
 */

namespace app\design\kernel\Builder;


class PersonDirector
{
    private $builder;

    public function __construct(PersonBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function createPerson()
    {
        $this->builder->buildHead();
        $this->builder->buildBody();
        $this->builder->buildLeftArm();
        $this->builder->buildRightArm();
        $this->builder->buildLeftLeg();
        $this->builder->buildRightLeg();
    }
}