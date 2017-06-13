<?php
namespace Conpago\Utils;

use PHPUnit\Framework\TestCase;

class SessionAccessorTest extends TestCase
{
    const KEY_NAME = 'xxx';

    const KEY_VALUE = 'a';

    /**
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    protected function setUp()
    {
        $GLOBALS['_SESSION'] = array();
    }

    /**
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function testContains()
    {
        $sessionAccessor = new SessionAccessor();
        $this->assertEquals(false, $sessionAccessor->contains(self::KEY_NAME));
        $_SESSION = array(self::KEY_NAME => self::KEY_VALUE);
        $this->assertEquals(true, $sessionAccessor->contains(self::KEY_NAME));
    }

    /**
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function testGetValue()
    {
        $_SESSION = array(self::KEY_NAME => self::KEY_VALUE);
        $sessionAccessor = new SessionAccessor();
        $this->assertEquals(self::KEY_VALUE, $sessionAccessor->getValue(self::KEY_NAME));
    }

    /**
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function testSetValue()
    {
        $_SESSION = array();
        $sessionAccessor = new SessionAccessor();
        $sessionAccessor->setValue(self::KEY_NAME, self::KEY_VALUE);

        $this->assertEquals(array(self::KEY_NAME => self::KEY_VALUE), $_SESSION);
    }
}
