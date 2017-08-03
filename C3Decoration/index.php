<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('\C2Strategy\Loader::autoload');

use App\Person;
use App\Finery\Tshirts;
use App\Finery\BigTrouser;
use App\Finery\WearSneakers;
//
//$John = new Person('John');
//
//$upClose = new Tshirts;
//$downClose = new BigTrouser;
//$shoes = new WearSneakers;
//$upClose->show();
//$downClose->show();
//$shoes->show();
//$John->show();

/*
 * 我们需要把所需的功能按照正确的顺序串联起来，进行控制
 */

use App\Component;

$John = new Person('John');
$cloth = new Component;
$cloth->addDecoration(new Tshirts);
$cloth->addDecoration(new BigTrouser);
$cloth->addDecoration(new WearSneakers);

$John->show();
$cloth->show();
?>
