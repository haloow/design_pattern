<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/10/14 0014
 * Time: 16:29
 */

namespace app\design\kernel\Bridge;


class IPhoneBrand extends Brand
{
    public function run()
    {
        foreach ($this->software as $item){
            $item->run();
        }
    }
}