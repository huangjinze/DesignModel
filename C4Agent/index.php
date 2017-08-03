<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('\C4Agent\Loader::autoload');

use App\Person;

//$jiaojiao = new Person('jiaojiao');
//$zhuojiayi = new \App\Pursuit($jiaojiao);
////娇娇不认识zhuojiayi
//$zhuojiayi->giveChocolate();
//$zhuojiayi->giveDolls();
//$zhuojiayi->giveFlowers();

/**
 * 代理模式
 */
$jiaojiao = new Person('jiaojiao');
$daili = new \App\Proxy($jiaojiao);
$daili->giveFlowers();
$daili->giveChocolate();
$daili->giveDolls();

?>
