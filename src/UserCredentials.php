<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http;

use JetBrains\PhpStorm\ArrayShape;

class UserCredentials
{
    public function __construct(
        private ?string $user = null,
        private ?string $password = null,
    )
    {

    }

    /**
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return bool
     */
    public function hasCredentials(): bool
    {
        return isset($this->user, $this->password);
    }

    #[ArrayShape(['auth_basic' => "array"])]
    public function toAuthBasic(): array
    {
        return ['auth_basic' => [$this->user, $this->password]];
    }
}