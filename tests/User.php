<?php

use Common\Traits\DataLoader;
use Common\Traits\RawLoader;

/**
 * User class is the helper to test traits in php unit.
 */
class User
{
    use RawLoader;
    use DataLoader;

    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
