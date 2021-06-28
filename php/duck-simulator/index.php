<?php 

require_once 'vendor/autoload.php';

error_reporting(E_ALL);

use App\Classes\MallardDuck;
use App\Classes\Fly\FlyNoWay;
use App\Classes\Fly\FlyWithWings;
use App\Classes\Quack\Quack;
use App\Classes\Quack\Sneak;

$d = new MallardDuck();
$d->setFlyBehavior(new FlyWithWings());
$d->setQuackBehavior(new Sneak());

$d->display();
$d->quack();
$d->fly();
