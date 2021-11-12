<?php

declare(strict_types=1);

namespace Model\Score;

class DebitCard implements Scoreable
{
    // ...

    public function getTotalConsumed(): float
    {
        return 250.65;
    }

    public function calculateScore(): float
    {
        return $this->getTotalConsumed() * 0.01;
    }
}
