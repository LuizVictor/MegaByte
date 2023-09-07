<?php

namespace MegaBank\Domain\Client;

use MegaBank\Domain\Client\Exceptions\InvalidCpfException;

class Cpf
{
    private string $cpf;

    public function __construct($cpf)
    {
        $options = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}.\d{3}\-\d{2}/'
            ]
        ];

        if (filter_var($cpf, FILTER_VALIDATE_REGEXP, $options) === false) {
            throw new InvalidCpfException("Invalid CPF");
        }

        $this->cpf = $cpf;
    }

    public function __toString(): string
    {
        return $this->cpf;
    }
}