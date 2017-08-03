<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/6/30
 * Time: 14:28
 */

namespace App\OperatorV2;


class OperatorDiviV2 extends OperationV2
{
    public function getResult()
    {
        // TODO: Implement getResult() method.
        try {
            if ($this->getNumberB() == 0)
            {
                throw new \Exception("除数不能为0");
        }
            $result = $this->getNumberA() / $this->getNumberB();
            return $result;
        } catch(\Exception $e) {
            echo $e->getMessage();
            return -1;
        }
    }
}