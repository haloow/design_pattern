<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/24
 * Time: 10:53
 */

namespace app\design\kernel\Observer;

abstract class Subject
{

    private $observers = [];

    public function attach(Observer $observer)
    {
        array_push($this->observers,$observer);
    }

    public function detach(Observer $observer)
    {
        $key=array_search($observer ,$this->observers );
        array_splice($this->observers,$key,1);
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            echo $observer->update().'<br>';
        }
    }
}