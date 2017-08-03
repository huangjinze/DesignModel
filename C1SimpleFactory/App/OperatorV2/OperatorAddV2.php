<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/6/30
 * Time: 13:37
 */

namespace App\OperatorV2;


class OperatorAddV2 extends OperationV2
{
    public function getResult()
    {
        // TODO: Implement getResult() method.
        $result = $this->getNumberA() + $this->getNumberB();
        return $result;
    }
}