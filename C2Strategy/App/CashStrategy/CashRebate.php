<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 1:23
 */

namespace App\CashStrategy;


use App\CashSuper;

class CashRebate extends CashSuper
{
    private $moneyRebate = 1;
    function __construct($moneyRebate = 0.8)
    {   
        $this->moneyRebate = $moneyRebate;
    }

    public function acceptCash($money)
    {
        // TODO: Implement acceptCash() method.
        return $money * $this->moneyRebate;
    }
}