<?php

namespace Strategy\Interface;

interface PaymentMethodInterface
{

    /**
     * @param string $orderNumber
     */
    public function sendOrderNumber(string $orderNumber): void;

    /**
     * @param string $orderNumber
     */
    public function checkOrderNumber(string $orderNumber): void;
}