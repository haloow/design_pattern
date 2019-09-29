<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/29 0029
 * Time: 14:29
 */

namespace app\design\kernel\Memo;


class Taker
{
    private $memo;

    /**
     * @return mixed
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param mixed $memo
     */
    public function setMemo(Memo $memo)
    {
        $this->memo = $memo;
    }
}