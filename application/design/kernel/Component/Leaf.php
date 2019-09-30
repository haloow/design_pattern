<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/30 0030
 * Time: 11:36
 */

namespace app\design\kernel\Component;


class Leaf extends Component
{
    public function add(Component $c)
    {
        echo "can not add a component to a leaf<br/>";
    }

    public function remove(Component $c)
    {
        echo "can not remove a component from a leaf<br/>";
    }

    public function display($dept)
    {
        $this->createDept($dept);
        echo $this->name."<br/>";
    }
}