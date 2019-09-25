<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/25 0025
 * Time: 15:09
 */
namespace app\design\kernel\State;

class Work
{
    private $current;

    public function __construct()
    {
        $this->current = new ForenoonState();
    }

    /**
     * @return mixed
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param mixed $current
     */
    public function setCurrent(State $current)
    {
        $this->current = $current;
    }

    private $finish = false;

    /**
     * @return bool
     */
    public function isFinish(): bool
    {
        return $this->finish;
    }

    /**
     * @param bool $finish
     */
    public function setFinish(bool $finish)
    {
        $this->finish = $finish;
    }

    private $hour;

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    public function writeProgram()
    {
        return $this->current->writeProgram($this);
    }

}