<?php

namespace App\DTO;

use App\Enums\TransactionStatus;

class Transaction extends Registry
{
    /**
     * @var TransactionStatus
     */
    private TransactionStatus $status;

    /**
     * @var string
     */
    private string $transactionId;

    /**
     * @var float
     */
    private float $amount;

    /**
     * @var int
     */
    private int $userId;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return void
     */
    public function setTransactionId(string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return TransactionStatus
     */
    public function getStatus(): TransactionStatus
    {
        return $this->status;
    }

    /**
     * @param TransactionStatus|string $status
     * @return void
     */
    public function setStatus(TransactionStatus|string $status): void
    {
        if (is_string($status)) {
            $this->status = $this->mapPayPalStatus($status);
        } else {
            $this->status = $status;
        }
    }

    /**
     * Mapea los estados de PayPal al enum TransactionStatus
     * @param string $paypalStatus
     * @return TransactionStatus
     */
    private function mapPayPalStatus(string $paypalStatus): TransactionStatus
    {
        // PayPal usa CANCELLED (doble L), nosotros usamos CANCELED (una L)
        return match (strtoupper($paypalStatus)) {
            'CREATED' => TransactionStatus::CREATED,
            'COMPLETED' => TransactionStatus::COMPLETED,
            'CANCELLED', 'CANCELED' => TransactionStatus::CANCELED,
            default => TransactionStatus::tryFrom($paypalStatus) ?? TransactionStatus::CREATED,
        };
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return void
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return void
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return array<string, mixed>
     */
    public function toCreate(): array
    {
        return [
            'id' => null,
            'transaction_id' => $this->getTransactionId(),
            'status' => $this->getStatus()->value,
            'amount' => $this->getAmount(),
            'user_id' => $this->getUserId()
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toUpdate(): array
    {
        return [
            'status' => $this->getStatus()->value
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'status' => $this->getStatus()->value,
            'transactionId' => $this->getTransactionId(),
            'amount' => $this->getAmount(),
            ...parent::toArray(),
        ];
    }
}
