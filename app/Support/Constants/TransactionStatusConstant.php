<?php
namespace App\Support\Constants;

class TransactionStatusConstant
{
    const NEW = 0;
    const PENDING = 1;
    const COMPLETED = 2;
    const CANCELLED = 3;
    const EXPIRED = 4;

    const ALL = [
        self::NEW,
        self::PENDING,
        self::COMPLETED,
        self::CANCELLED,
        self::EXPIRED,
    ];

    const NAMES = [
        self::NEW => 'New',
        self::PENDING => 'Pending',
        self::COMPLETED => 'Completed',
        self::CANCELLED => 'Cancelled',
        self::EXPIRED => 'Expired',
    ];
}
