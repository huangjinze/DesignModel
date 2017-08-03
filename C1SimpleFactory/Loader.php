<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/6/30
 * Time: 11:48
 */

namespace C1SimpleFactory;


class Loader
{
    static function autoload($class)
    {
//        var_dump(BASEDIR.'/'.$class.'.php');
        require BASEDIR.'/'.$class.'.php';
    }
}