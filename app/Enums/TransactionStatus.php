<?php

namespace App\Enums;

enum TransactionStatus: string
{
    case CREATED = 'CREATED';
    case COMPLETED = 'COMPLETED';
    case CANCELED = 'CANCELED';
}
