<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/29 0029
 * Time: 14:26
 */

namespace app\design\kernel\Memo;

class Originator
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

    public function createMemo() : Memo
    {
        return new Memo($this->getState());
    }

    public function recovery(Memo $memo)
    {
        $this->setState($memo->getState());
    }

    public function show()
    {
        echo $this->getState();
        echo '<br/>';
    }
}