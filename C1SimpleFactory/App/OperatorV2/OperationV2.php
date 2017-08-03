<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/6/30
 * Time: 12:47
 */

namespace App\OperatorV2;


abstract class OperationV2
{
    private $_numberA = 0;
    private $_numberB = 0;

    function __construct($numberA, $numberB)
    {
        $this->_numberA = $numberA;
        $this->_numberB = $numberB;

    }


    public function getNumberA()
    {
        return $this->_numberA;
    }

    public function getNumberB()
    {
        return $this->_numberB;
    }

    public abstract function getResult();
}

