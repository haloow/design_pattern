<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/30
 * Time: 16:26
 */

namespace Prototype;


class Experience implements Prototype
{
    private $workDate;
    private $company;

    public function getWorkDate()
    {
        return $this->workDate;
    }

    public function setWorkDate($workDate)
    {
        $this->workDate = $workDate;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function clone()
    {
        return clone $this;
    }

    public function __clone()
    {
        $this->workDate = "2008";
        $this->company = "Tencent";
    }
}