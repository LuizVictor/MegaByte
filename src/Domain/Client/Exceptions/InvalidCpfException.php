<?php

namespace MegaBank\Domain\Client\Exceptions;

use InvalidArgumentException;

class InvalidCpfException extends InvalidArgumentException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}