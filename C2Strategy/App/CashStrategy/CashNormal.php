<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 1:22
 */

namespace App\CashStrategy;


use App\CashSuper;

class CashNormal extends CashSuper
{
    public function acceptCash($money)
    {
        // TODO: Implement acceptCash() method.
        return $money;
    }
}