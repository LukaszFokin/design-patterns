<?php

namespace Strategy\Order;

use Strategy\Interface\PaymentMethodInterface;

class Order
{
    private PaymentMethodInterface $paymentMethod;
    private string $orderNumber;

    public function __construct(PaymentMethodInterface $paymentMethod, string $orderNumber)
    {
        $this->paymentMethod = $paymentMethod;
        $this->orderNumber = $orderNumber;
    }

    public function getPaymentMethod(): PaymentMethodInterface {
        return $this->paymentMethod;
    }

    public function getOrderNumber(): string {
        return $this->orderNumber;
    }

    public function sendOrderNumber(): void {
        $this->getPaymentMethod()->sendOrderNumber($this->getOrderNumber());
    }

    public function checkOrderNumber(): void {
        $this->getPaymentMethod()->checkOrderNumber($this->getOrderNumber());
    }
}
