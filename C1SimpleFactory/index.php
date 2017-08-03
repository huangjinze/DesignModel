<?php
use App\CaculatorPanelV1;
use App\CaculatorPanelV2;
define('BASEDIR', __DIR__);
include BASEDIR.'/Loader.php';

spl_autoload_register('\C1SimpleFactory\Loader::autoload');

/**
 * Version1: separate the control panel and operation
 */
//$myCaculator = new CaculatorPanelV1;
//$myCaculator->caculator();

/**
 * Version2
 */
$myCaculator2 = new CaculatorPanelV2;
$myCaculator2->caculator();

