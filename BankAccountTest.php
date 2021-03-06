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

    /** @test */
    function it_can_initialize_the_balance_via_constructor()
    {
        $account = new BankAccount(100);
        $balance = $account->getBalance();

        $this->assertEquals(100, $balance);
    }

    /** @test */
    function it_can_make_a_deposit_to_the_account()
    {
        $account = new BankAccount(100);
        $account->deposit(50);
        $balance = $account->getBalance();

        $this->assertEquals(150, $balance);
    }

    /** @test */
    function it_can_perform_a_withdrawal()
    {
        $account = new BankAccount(100);
        $account->withdrawal(25);

        $this->assertEquals(75, $balance);
    }

    /** @test */
    function withdraw_more_than_the_available_throws_an_exception()
    {
        $this->expectException(InsuficientBalanceException::class);

        $account = new BankAccount(100);
        $account->withdrawal(200);
    }
}
