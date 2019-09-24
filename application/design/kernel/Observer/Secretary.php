<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/24 0024
 * Time: 11:06
 */

namespace app\design\kernel\Observer;


class Secretary extends Subject
{
    private $subjectState;

    /**
     * @return mixed
     */
    public function getSubjectState()
    {
        return $this->subjectState;
    }

    /**
     * @param mixed $subjectState
     */
    public function setSubjectState($subjectState)
    {
        $this->subjectState = $subjectState;
    }

    public function sayHello()
    {
        echo "hello world";
    }
}