<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 1:26
 */

namespace App\CashStrategy;


use App\CashSuper;

class CashReturn extends CashSuper
{
    private $moneyCondition = 0.0;
    private $moneyReturn = 0.0;
    function __construct($moneyCondition, $moneyReturn)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    public function acceptCash($money)
    {
        // TODO: Implement acceptCash() method.
        $result = $money;
        if($money > $this->moneyCondition)
        {
            $result = $money - floor($money / $this->moneyCondition) * $this->moneyReturn;
        }
        return $result;
    }
}