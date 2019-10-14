<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/10/14 0014
 * Time: 16:21
 */

namespace app\design\kernel\Bridge;

abstract class Brand
{
    protected $software = [];

    public function addSoftware(Soft $software){
        array_push($this->software,$software);
    }

    public function removeSoftware(Soft $software){
        $key=array_search($software ,$this->software );
        array_splice($this->software,$key,1);
    }

    abstract public function run();
}