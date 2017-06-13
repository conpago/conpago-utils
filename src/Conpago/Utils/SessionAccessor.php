<?php
namespace Conpago\Utils;

/**
 * Class SessionAccessor
 */
class SessionAccessor
{
    /**
     * @param mixed $name
     *
     * @return bool
     *
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function contains($name): bool
    {
        return $_SESSION != null && array_key_exists($name, $_SESSION);
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
        return $_SESSION[$key];
    }

    /**
     * @param mixed $name
     * @param mixed $value
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function setValue($name, $value): void
    {
        $_SESSION[$name] = $value;
    }
}
