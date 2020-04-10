<?php
namespace Dframe\Component\Token\Tests;

use Dframe\Component\Messages\Messages;
use Exception;
use Bootstrap;
use PHPUnit\Framework\TestCase;

class MessagesTest extends TestCase
{
    public function testConstructor()
    {
        $bootstrap = new Bootstrap();

        $this->assertInstanceOf(Messages::class, $bootstrap->messages);
    }

    public function testConstructorThrowsExceptionOnInvalidDriver()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('This class Require instance Of \Psr\SimpleCache\CacheInterface');

        new Messages('invalid_driver');
    }

    public function testClear()
    {
        $bootstrap = new Bootstrap();
        $expectedMessage = $bootstrap->messages->add('i', 'test');
        $bootstrap->messages->clear();

        $this->assertNotEquals($expectedMessage, $bootstrap->messages->hasMessages('info'));
    }

    public function testError()
    {
        $bootstrap = new Bootstrap();

        $this->assertFalse($bootstrap->messages->hasErrors());

        $bootstrap->messages->add('e', 'error');

        $this->assertEquals($bootstrap->messages->hasErrors(), true);
    }
}
