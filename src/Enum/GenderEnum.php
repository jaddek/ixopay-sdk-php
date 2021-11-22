<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

interface GenderEnum
{
    public const GENDER_MALE   = 'M';
    public const GENDER_FEMALE = 'F';

    public const GENDERS = [
        self::GENDER_MALE,
        self::GENDER_FEMALE,
    ];
}