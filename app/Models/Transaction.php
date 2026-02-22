<?php

namespace App\Models;

use App\Enums\TransactionStatus;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'transaction_id',
        'status',
        'amount',
        'user_id'
    ];

    protected $casts = [
        'status' => TransactionStatus::class,
    ];
}
