<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 12:31
 */

namespace App;


use App\CashStrategy\CashNormal;
use App\CashStrategy\CashRebate;
use App\CashStrategy\CashReturn;
class CashFactory
{
    static public function createCashAccept($type)
    {
        $cc = null;
        switch ($type)
        {
            case 0:
                $cc = new CashNormal;
                break;
            case 1:
                $cc = new CashRebate("0.8");
                break;
            case 2:
                $cc = new CashReturn("300", "100");
                break;
        }
        return $cc;

    }
}