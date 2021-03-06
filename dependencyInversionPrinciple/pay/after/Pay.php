<?php

declare(strict_types=1);

namespace Model\Pay;

class Pay 
{       
    private Payable $service;

    public function __construct(Payable $service)
    {
        $this->service = $service;
    }

    public function pay(float $value): PayResponse
    {
        return $this->service->pay($value);
    }
}
