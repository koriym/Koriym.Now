<?php

namespace Koriym\Now;

use Ray\Di\Injector;

class NowModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testNowModule()
    {
        $now = (new Injector(new NowModule))->getInstance(NowInterface::class);
        $this->assertInstanceOf(NowInterface::class, $now);
    }

    public function testNowInject()
    {
        $fafeUser = (new Injector(new FakeNowModule))->getInstance(FakeUser::class);
        /* @var $fafeUser FakeUser */
        $param = (new \ReflectionProperty($fafeUser, 'now'));
        $param->setAccessible(true);
        $expected = FakeNow::TIME;
        $this->assertSame($expected, $param->getValue($fafeUser));
    }
}
