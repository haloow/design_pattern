<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/24 0024
 * Time: 11:31
 */

namespace app\design\kernel\Observer;



class Colleague extends Observer
{
    public function __construct($name, Subject $subject)
    {
        parent::__construct($name, $subject);
    }

    public function update()
    {
        return $this->subject->getSubjectState().' '.$this->name.' 继续工作';
    }
}