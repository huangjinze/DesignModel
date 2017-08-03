<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/6/30
 * Time: 14:13
 */

namespace App;


class CaculatorPanelV2
{
    static function caculator()
    {
        fwrite(STDOUT,"enter tne number1:");
        $numberA = trim(fgets(STDIN));
        fwrite(STDOUT,"enter tne number2:");
        $numberB = trim(fgets(STDIN));
        fwrite(STDOUT,"enter tne operator:");
        $operator = trim(fgets(STDIN));
        $strResult = SimpleFactoryV2::createOperator($operator, $numberA, $numberB);
        fwrite(STDOUT, $strResult->getResult());
    }
}