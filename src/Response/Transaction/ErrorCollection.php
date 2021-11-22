<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Response\Transaction;

use Jaddek\Ixopay\Http\Response\Collection;

class ErrorCollection extends Collection
{
    /**
     * @return array<Error>
     */
    public function getErrors(): array
    {
        return $this->getCollection();
    }

    public static function getSupportedItem(): string
    {
        return Error::class;
    }

    public static function getItemsKey(): string
    {
        return 'errors';
    }
}