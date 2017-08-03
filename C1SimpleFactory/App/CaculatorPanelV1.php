<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/6/30
 * Time: 11:26
 */

namespace App;


class CaculatorPanelV1
{
    /**
 * Version1: separate the control panel and operation
 */
    static function caculator()
    {
        fwrite(STDOUT,"enter tne number1:");
        $numberA = trim(fgets(STDIN));
        fwrite(STDOUT,"enter tne number2:");
        $numberB = trim(fgets(STDIN));
        fwrite(STDOUT,"enter tne operator:");
        $operator = trim(fgets(STDIN));
        $strResult = OperatorV1::operation($numberA, $numberB, $operator);
        fwrite(STDOUT, $strResult);
    }
}