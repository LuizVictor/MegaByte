<?php

namespace MegaBank\Domain\Client;

class Client
{
    private Cpf $cpf;
    private string $name;
    private Email $email;

    public function __construct(string $cpf, string $name, string $email)
    {
        $this->cpf = new Cpf($cpf);
        $this->name = $name;
        $this->email = new Email($email);
    }

    public function cpf(): string
    {
        return $this->cpf;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }
}