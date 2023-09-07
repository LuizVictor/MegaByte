<?php

namespace MegaBank\Tests\Unit;

use MegaBank\Domain\Account\Account;
use MegaBank\Domain\Client\Client;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    public function testCreateAccount()
    {
        $client = new Client("123.123.123-12", "John Doe", "john@email.com");
        $account = new Account($client);
        self::assertIsInt($account->number());
        self::assertSame("123.123.123-12", $account->client()->cpf());
    }
}
