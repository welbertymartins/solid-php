<?php

declare(strict_types=1);

namespace Model\Pay;

interface Payable
{
    public function pay(float $value);
}
