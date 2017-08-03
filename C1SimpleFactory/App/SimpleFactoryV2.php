<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/6/30
 * Time: 14:14
 */

namespace App;


use App\OperatorV2\OperatorAddV2;
use App\OperatorV2\OperatorDiviV2;
use App\OperatorV2\OperatorMutiV2;
use App\OperatorV2\OperatorSubV2;

class SimpleFactoryV2
{
    public static function createOperator($operate, $numberA, $numberB)
    {
        $oper = null;
        switch($operate)
        {
            case '+':
                $oper = new OperatorAddV2($numberA, $numberB);
                break;
            case '-':
                $oper = new OperatorSubV2($numberA, $numberB);
                break;
            case '*':
                $oper = new OperatorMutiV2($numberA, $numberB);
                break;
            case '/':
                $oper = new OperatorDiviV2($numberA, $numberB); 
                break;
        }
        
        return $oper;
    }
}