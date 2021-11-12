<?php

declare(strict_types=1);

namespace Model\Pay;

class Pay 
{
    public function pay($value, $type)
    {
        if( $type instanceof CreditCard ){

            $cardNumber = $type->getCardNumber();
            // ...

        } else if( $type instanceof DebitCard ) {
           
            $cardNumber = $type->getCardNumber();
            // ...
        }
    }
}
