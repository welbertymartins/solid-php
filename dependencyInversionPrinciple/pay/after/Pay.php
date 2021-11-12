<?php

declare(strict_types=1);

namespace Model\Pay;

class Pay 
{       
    private Payable $client;

    public function __construct(Payable $client) {
        $this->client = $client;
    }

    public function pay()
    {
        $this->client->pay();
    }
}