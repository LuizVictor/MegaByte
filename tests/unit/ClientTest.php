<?php

namespace MegaBank\Tests\Unit;

use MegaBank\Domain\Client\Client;
use MegaBank\Domain\Client\Exceptions\InvalidEmailException;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testCreateClient()
    {
        $john = new Client("123.123.123-12", "John Doe", "john@email.com");
        self::assertSame("123.123.123-12", $john->cpf());
        self::assertSame("John Doe", $john->name());
        self::assertSame("john@email.com", $john->email());
    }

    public function testMustNotCreateClientWithInvalidCpf()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Invalid CPF");
        new Client("123.123.12312", "John Doe", "john@email.com");
    }

    public function testMustNotCreateClientWithInvalidEmail()
    {
        $this->expectException(InvalidEmailException::class);
        $this->expectExceptionMessage("Invalid Email");
        new Client("123.123.123-12", "John Doe", "Invalid");
    }
}
