<?php

declare(strict_types=1);

namespace Model\Pay;

class CreditCard implements Payable
{
    public function pay(float $value): PayResponse
    {
        // ...
        return new PayResponse();
    }
}
