<?php

namespace Common\Traits;

trait DataLoader
{
    /**
     * @param array $data
     *
     * @return $this
     */
    public function loadData(array $data): self
    {
        foreach ($data as $key => $value) {
            if (!in_array($key, $this->getKeysNeedNotLoad())) {
                $method = $this->getMethod(
                    $this->convertKeySnakeCaseToCamelCase($key)
                );

                if (method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }

        return $this;
    }

    /**
     * @param string $key
     *
     * @return string
     */
    public function convertKeySnakeCaseToCamelCase(string $key): string
    {
        return str_replace('_', '', ucwords($key, '_'));
    }

    /**
     * Exclude this properties from loading
     *
     * @return array|string[]
     */
    protected function getKeysNeedNotLoad(): array
    {
        return [
            'createdAt',
            'updatedAt',
        ];
    }

    /**
     * @param string $property
     *
     * @return string
     */
    protected function getMethod(string $property): string
    {
        return sprintf('set%s', ucfirst($property));
    }
}
