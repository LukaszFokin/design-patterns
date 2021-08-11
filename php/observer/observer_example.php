<?php

require_once "../vendor/autoload.php";

$subject = new Observer\Subject\Subject();

$observer1 = new \Observer\Observer\Observer1();
$observer2 = new \Observer\Observer\Observer2();

$subject->attach($observer1);
$subject->attach($observer2);

$subject->doSomething();
