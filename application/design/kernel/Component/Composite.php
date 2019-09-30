<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/30 0030
 * Time: 11:47
 */

namespace app\design\kernel\Component;


class Composite extends Component
{
    private $component = [];

    public function add(Component $c)
    {
        array_push($this->component,$c);
    }

    public function remove(Component $c)
    {
        $key=array_search($c ,$this->component);
        array_splice($this->component,$key,1);
    }

    public function display($dept)
    {
        $this->createDept($dept);
        echo $this->name."<br/>";

        foreach ($this->component as $com){
            $com->display($dept + 2);
        }
    }
}