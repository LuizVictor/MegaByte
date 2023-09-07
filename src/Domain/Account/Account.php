<?php

namespace MegaBank\Domain\Account;

use MegaBank\Domain\Client\Client;
use MegaBank\Domain\Client\ClientDto;

class Account
{
    private int $number;
    private Client $client;

    public function __construct(Client $client)
    {
        $this->number = $this->generateNumber();
        $this->client = $client;
    }

    private function generateNumber(): int
    {
        return rand(0000, 9999);
    }

    public function number(): int
    {
        return $this->number;
    }

    public function client(): Client
    {
        return $this->client;
    }
}