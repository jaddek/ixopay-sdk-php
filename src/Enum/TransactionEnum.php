<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Enum;

interface TransactionEnum
{
    public const TRANSACTION_INDICATOR_SINGLE                        = 'SINGLE';
    public const TRANSACTION_INDICATOR_INITITAL                      = 'INITIAL';
    public const TRANSACTION_INDICATOR_RECURRING                     = 'RECURRING';
    public const TRANSACTION_INDICATOR_CARDONFILE                    = 'CARDONFILE';
    public const TRANSACTION_INDICATOR_CARDONFILE_MERCHANT_INITIATED = 'CARDONFILE-MERCHANT-INITIATED';
    public const TRANSACTION_INDICATOR_MOTO                          = 'MOTO';

    public const TRANSACTION_INDICATORS = [
        self::TRANSACTION_INDICATOR_SINGLE,
        self::TRANSACTION_INDICATOR_INITITAL,
        self::TRANSACTION_INDICATOR_RECURRING,
        self::TRANSACTION_INDICATOR_CARDONFILE,
        self::TRANSACTION_INDICATOR_CARDONFILE_MERCHANT_INITIATED,
        self::TRANSACTION_INDICATOR_MOTO
    ];
}