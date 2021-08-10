<?php

namespace Strategy\PaymentMethod;

use Strategy\Interface\PaymentMethodInterface;

class PicPay implements PaymentMethodInterface
{

    public function sendOrderNumber(string $orderNumber): void
    {
        echo "[PICPAY] SENDING ORDER NUMBER {$orderNumber} TO PICPAY" . PHP_EOL;
    }

    public function checkOrderNumber(string $orderNumber): void
    {
        echo "[PICPAY] CHECKING ORDER NUMBER {$orderNumber} ERROR" . PHP_EOL;
    }
}