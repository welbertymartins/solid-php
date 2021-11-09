<?php

declare(strict_types=1);

namespace Model\Score;

class CreditCard implements Scoreable
{
    // ...
    
    public function getTotalConsumed(): float
    {
        return 100;
    }

    public function calculateScore(): float
    {
        return $this->getTotalConsumed() * 0.02;
    }
}
