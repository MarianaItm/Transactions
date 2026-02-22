<?php

namespace App\DTO;

class User extends Registry
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var float
     */
    private float $balance;

    /**
     * @var array<Transaction>
     */
    private array $transactions;

    public function __construct()
    {
        parent::__construct();
        $this->transactions = [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return void
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return void
     */
    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * @return array<Transaction>
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    /**
     * @param Transaction[] ...$transactions
     * @return void
     */
    public function setTransactions(Transaction ...$transactions): void
    {
        $this->transactions = $transactions;
    }

    /**
     * @param float $amount
     * @return float
     */
    public function increment(float $amount): float
    {
        return $this->balance += $amount;
    }

    /**
     * @return array<string, mixed>
     */
    public function toUpdate(): array
    {
        // En un futuro se puede agregar los demás campos
        return [
            'balance' => $this->getBalance()
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'balance' => $this->getBalance(),
            'transactions' => array_map(function ($row) {
                return $row->toArray();
            }, $this->getTransactions()),
            ...parent::toArray(),
        ];
    }
}
