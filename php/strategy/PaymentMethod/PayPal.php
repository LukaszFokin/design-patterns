<?php

namespace Strategy\PaymentMethod;

use Strategy\Interface\PaymentMethodInterface;

class PayPal implements PaymentMethodInterface
{

    public function sendOrderNumber(string $orderNumber): void
    {
        echo "[PAYPAL] SENDING ORDER NUMBER {$orderNumber} TO PAYPAL" . PHP_EOL;
    }

    public function checkOrderNumber(string $orderNumber): void
    {
        echo "[PAYPAL] CHECKING ORDER NUMBER {$orderNumber} SUCCESS" . PHP_EOL;
    }
}