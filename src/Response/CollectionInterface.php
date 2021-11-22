<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Response;

interface CollectionInterface
{
    public function add(ItemInterface $item): void;

    public function getCollection(): array;

    public static function getSupportedItem(): string;

    public static function getItemsKey(): string;
}