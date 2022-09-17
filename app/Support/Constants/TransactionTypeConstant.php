<?php
namespace App\Support\Constants;

class TransactionTypeConstant
{
    public const DEPOSIT = 0;
    public const EXCHANGE = 1;
    public const BROKER_DEPOSIT = 2;
    public const BROKER_WITHDRAWAL = 3;
    public const TRANSFER = 4;
    public const WITHDRAWAL = 5;
    public const BROKER_DEPOSIT_BTC = 6;
    public const COLLECT_FEES = 7;
    public const BROKER_PAYMENT = 8;
    public const REFUND_NO_TAX = 9;
    public const REFUND_WITH_TAX = 10;
    public const REFUND_FEES = 11;
    public const BROKER_LOAD = 12;
    public const PAYABLE_BILLET = 13;
    public const ECOMMERCE_DEPOSIT = 14;
    public const REWARDS_POINTS_EXCHANGE = 15;
    public const CASHBACK = 16;
    public const LOSSES = 17;
    public const RECOVERY = 18;

    public const NAMES = [
        self::DEPOSIT => 'Deposit',
        self::EXCHANGE => 'Exchange',
        self::BROKER_DEPOSIT => 'Broker deposit',
        self::BROKER_WITHDRAWAL => 'Broker withdrawal',
        self::TRANSFER => 'Transfer',
        self::WITHDRAWAL => 'Withdrawal',
        self::BROKER_DEPOSIT_BTC => 'Broker Deposit BTC',
        self::COLLECT_FEES => 'Collect Fees',
        self::BROKER_PAYMENT => 'Broker payment',
        self::REFUND_NO_TAX => 'Refund no tax',
        self::REFUND_WITH_TAX => 'Refund with tax',
        self::REFUND_FEES => 'Refund fees',
        self::BROKER_LOAD => 'Broker load',
        self::PAYABLE_BILLET => 'Payable Billet',
        self::ECOMMERCE_DEPOSIT => 'Ecommerce deposit',
        self::REWARDS_POINTS_EXCHANGE => 'Rewards points exchange',
        self::CASHBACK => 'Cashback',
        self::LOSSES => 'Losses',
        self::RECOVERY => 'Recovery',
    ];

    public const ALL = [
        self::DEPOSIT,
        self::EXCHANGE,
        self::BROKER_DEPOSIT,
        self::BROKER_WITHDRAWAL,
        self::TRANSFER,
        self::WITHDRAWAL,
        self::BROKER_DEPOSIT_BTC,
        self::COLLECT_FEES,
        self::BROKER_PAYMENT,
        self::REFUND_NO_TAX,
        self::REFUND_WITH_TAX,
        self::REFUND_FEES,
        self::BROKER_LOAD,
        self::PAYABLE_BILLET,
        self::ECOMMERCE_DEPOSIT,
        self::REWARDS_POINTS_EXCHANGE,
        self::CASHBACK,
        self::LOSSES,
        self::RECOVERY,
    ];

    public const GATEWAY_TRANSACTION_TYPES = [
        self::DEPOSIT,
        self::WITHDRAWAL,
    ];

    public const EXPENSES_USER = [
        self::TRANSFER,
        self::WITHDRAWAL,
        self::BROKER_DEPOSIT
    ];
}
