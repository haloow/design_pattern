<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/10/14 0014
 * Time: 16:28
 */

namespace app\design\kernel\Bridge;


class SonyBrand extends Brand
{
    public function run()
    {
        foreach ($this->software as $item){
            $item->run();
        }
    }
}