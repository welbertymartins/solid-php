<?php

declare(strict_types=1);

namespace Model\Pay;

class Pay 
{
    public function pay($value, $type): PayResponse
    {
        if( $type instanceof CreditCard ){

            $cardNumber = $type->getCardNumber();
            // ...
            return new PayResponse();

        } else if( $type instanceof DebitCard ) {
           
            $cardNumber = $type->getCardNumber();
            // ...
            return new PayResponse();
        }
    }
}
