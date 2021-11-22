<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Response;

abstract class Collection implements CollectionInterface
{
    protected array $collection;

    public function add(ItemInterface $item): void
    {
        $this->collection[] = $item;
    }

    public function getCollection(): array
    {
        return $this->collection;
    }
}