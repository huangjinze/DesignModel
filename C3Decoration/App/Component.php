<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 15:51
 */

namespace App;


class Component
{
    protected $decorations = array();

    public function addDecoration(IFinery $decoration)
    {
        $this->decorations[] = $decoration;
    }

    public function before()
    {
        foreach ($this->decorations as $decoration)
        {
            $decoration->wear();
        }
    }

    public function after()
    {
        $decorations = array_reverse($this->decorations);
        foreach ($decorations as $decoration) {
            $decoration->wear();
        }
    }
    
    public function show()
    {
        $this->before();
//        $this->after();
    }
}