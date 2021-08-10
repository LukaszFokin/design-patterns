<?php

require_once '../vendor/autoload.php';


$payPal = new \Strategy\PaymentMethod\PayPal();
$picPay = new \Strategy\PaymentMethod\PicPay();
$orderNumber = "ABC1232021";

$order = new Strategy\Order\Order($payPal, $orderNumber);
$order->sendOrderNumber();
$order->checkOrderNumber();

$order = new \Strategy\Order\Order($picPay, $orderNumber);
$order->sendOrderNumber();
$order->checkOrderNumber();

