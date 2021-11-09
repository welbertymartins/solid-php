<?php

declare(strict_types=1);

namespace Model\Score;

class CalculateScore 
{
    public function calculate(Scoreable $input): float
    {
        return $input->calculateScore();   
    }
}
