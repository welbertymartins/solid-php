<?php

declare(strict_types=1);

namespace Model\Pay;

class DebitCard implements Payable
{
    public function pay(float $value): PayResponse
    {
        // ...
        return new PayResponse();
    }
}
