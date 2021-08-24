<?php

namespace Common\Traits;

trait RawLoader
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
