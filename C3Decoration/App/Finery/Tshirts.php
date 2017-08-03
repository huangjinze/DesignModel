<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 15:11
 */

namespace App\Finery;


use App\IFinery;

class Tshirts implements IFinery
{
    public function wear()
    {
        // TODO: Implement show() method.
        fwrite(STDOUT,"T shirts\n");
    }
}