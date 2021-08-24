<?php

namespace Common\Traits;

trait RawLoader
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $data          = get_object_vars($this);
        $data['class'] = get_class($this);

        return $data;
    }
}
