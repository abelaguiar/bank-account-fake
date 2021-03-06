<?php

class BankAccount
{
    /** @var int */
    protected $balance;

    public function __construct(int $balance = 0)
    {
        $this->balance = $balance;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
    }

    public function withdrawal(int $amount): void
    {
        $this->validateWithdraw($amount);

        $this->balance -= $amount;
    }

    private function validateWithdraw(int $amount)
    {
        if ($this->balance < $amount) {
            throw new InsuficientBalanceException;
        }
    }
}
