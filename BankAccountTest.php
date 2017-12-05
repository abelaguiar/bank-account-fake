<?php

class BankAccountTest extends PHPUnit_Framework_Festcase
{
    /** @test */
    function get_balance()
    {
        $account = new BankAccount;
        $balance = $account->getBalance();

        $this->assertEquals(0, $balance);
    }
}
