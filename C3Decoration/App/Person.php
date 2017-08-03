<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 15:07
 */

namespace App;


class Person
{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    
    public function show()
    {
        fwrite(STDOUT, "装扮的{$this->name}\n");
    }
}