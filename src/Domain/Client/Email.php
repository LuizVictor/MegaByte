<?php

namespace MegaBank\Domain\Client;

use MegaBank\Domain\Client\Exceptions\InvalidEmailException;

class Email
{
    private string $address;

    /**
     * @throws InvalidEmailException
     */
    public function __construct(string $address)
    {
        if (filter_var($address, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidEmailException("Invalid Email");
        }
        $this->address = $address;
    }

    public function __toString(): string
    {
        return $this->address;
    }
}