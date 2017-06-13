<?php
namespace Conpago\Utils;

use PHPUnit\Framework\TestCase;

class ServerAccessorTest extends TestCase
{
    const KEY_NAME = 'xxx';

    const KEY_VALUE = 'a';

    /**
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function testContains()
    {
        $serverAccessor = new ServerAccessor();
        $this->assertEquals(false, $serverAccessor->contains(self::KEY_NAME));
        $_SERVER = [self::KEY_NAME => self::KEY_VALUE];
        $this->assertEquals(true, $serverAccessor->contains(self::KEY_NAME));
    }

    /**
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function testGetValue()
    {
        $_SERVER = [self::KEY_NAME => self::KEY_VALUE];
        $serverAccessor = new ServerAccessor();
        $this->assertEquals(self::KEY_VALUE, $serverAccessor->getValue(self::KEY_NAME));
    }
}
