<?php
namespace Conpago\Utils;

class ServerAccessor
{
    /**
     * @param mixed $key
     *
     * @return bool
     *
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function contains($key): bool
    {
        return $_SERVER != null && array_key_exists($key, $_SERVER);
    }

    /**
     * @param mixed $key
     *
     * @return mixed
     *
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function getValue($key)
    {
        return $_SERVER[$key];
    }
}
