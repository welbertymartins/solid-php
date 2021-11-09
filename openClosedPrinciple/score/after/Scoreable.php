<?php

declare(strict_types=1);

namespace Model\Score;

interface Scoreable
{
   public function calculateScore(): float;
}
