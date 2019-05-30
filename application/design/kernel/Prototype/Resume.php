<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/30
 * Time: 16:26
 */

namespace app\design\kernel\Prototype;


use think\Exception;

class Resume implements Prototype
{
    private $name;
    private $sex;
    private $age;
    private $work;

    public function __construct($arg)
    {
        if ($arg instanceof Experience){
            $this->work = $arg->clone();
        }else{
            $this->name = $arg;
            $this->work = new Experience();
        }
    }

    public function setPersonalInfo($sex,$age){
        $this->sex = $sex;
        $this->age = $age;
    }

    public function setExperience($workDate,$company){
        $this->work->setWorkDate($workDate);
        $this->work->setCompany($company);
    }

    public function disPlay()
    {
        printf($this->name.' '.$this->sex.' '.$this->age.'<br/>');
        printf($this->work->getWorkDate().' '.$this->work->getCompany().'<br/>');
    }

    public function clone()
    {
        $obj = new Resume($this->work);
        $obj->name = $this->name;
        $obj->sex = $this->sex;
        $obj->age = $this->age;
        return $obj;
    }
}