<?php

class BankAccount
{
    /** @var int */
    protected $balance;

    public function __construct(int $balance)
    {
        $this->balance = $balance;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}
