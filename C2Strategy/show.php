<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('\C2Strategy\Loader::autoload');

use App\CashFactory;


    $price = $_REQUEST['price'];
    $count = $_REQUEST['count'];
    $totalMoney = $_REQUEST['totalMoney'];
    $discount = $_REQUEST['discount'];
//    $price = 12;
//    $count = 1;
//    $totalMoney = 122;
//    $discount = 0;
/**
 * simple factory model, 在简单工厂模式中，我们需要让客户端（当前页面）知道两个类，
 * CashSuper and CashFactory
 */
    $cc = CashFactory::createCashAccept($discount);

    $totalMoney = $totalMoney + $cc->acceptCash($price * $count);

    $response = array(
        'totalMoney' => $totalMoney,
        'sum' => $cc->acceptCash($price * $count)
    );
    echo json_encode($response);

?>
