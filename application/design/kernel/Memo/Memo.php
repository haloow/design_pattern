<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/29 0029
 * Time: 14:27
 */

namespace app\design\kernel\Memo;


class Memo
{
    private $state;

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    public function __construct($state)
    {
        $this->setState($state);
    }
}