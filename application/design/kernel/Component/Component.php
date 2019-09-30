<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/30 0030
 * Time: 11:34
 */

namespace app\design\kernel\Component;

abstract class Component
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function add(Component $c);
    abstract public function remove(Component $c);
    abstract public function display($dept);

    public function createDept($dept)
    {
        for ($i = 1; $i <= $dept; $i++){
            echo "-";
        }
    }
}