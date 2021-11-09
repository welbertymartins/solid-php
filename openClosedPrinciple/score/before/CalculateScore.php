<?php

declare(strict_types=1);

namespace Model\Score;

class CalculateScore 
{
    public function calculate($input): float
    {
        if( $input instanceof CreditCard ){
            return $input->getTotalConsumed() * 0.02;
        } else if( $input instanceof DebitCard ){
            return $input->getTotalConsumed() * 0.01;
        }
    }
}
