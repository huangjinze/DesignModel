<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 15:13
 */

namespace App\Finery;


use App\IFinery;

class WearSneakers implements IFinery
{
    public function wear()
    {
        // TODO: Implement show() method.
        fwrite(STDOUT,"破球鞋\n");
    }
}