<?php

declare(strict_types=1);

namespace Model\Pay;

class Pay 
{
    public function pay($value, $type)
    {
        if( $type instanceof CreditCard ){
            // ...
        } else if( $type instanceof DebitCard ) {
            // ...
        }
    }
}