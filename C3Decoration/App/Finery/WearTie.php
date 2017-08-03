<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 15:14
 */

namespace App\Finery;


use App\IFinery;

class WearTie implements IFinery
{
    public function wear()
    {
        // TODO: Implement show() method.
        fwrite(STDOUT,"wear tie\n");
    }
}