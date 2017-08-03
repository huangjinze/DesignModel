<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/6/30
 * Time: 12:28
 */

namespace App;


class OperatorV1
{
    /**
     * Version1: separate the control panel and operation
     */
    static function operation($numberA, $numberB, $operator)
    {
        $result = 0.0;
        switch ($operator)
        {
            case '+':
                $result = $numberA + $numberB;
                break;
            case '-':
                $result = $numberA - $numberB;
                break;
            case '*':
                $result = $numberA * $numberB;
                break;
            case '/':
                $result = $numberA / $numberB;
                break;
        }
        return $result;
    }
}