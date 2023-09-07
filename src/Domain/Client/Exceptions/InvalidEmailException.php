<?php

namespace MegaBank\Domain\Client\Exceptions;

use InvalidArgumentException;

class InvalidEmailException extends InvalidArgumentException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}