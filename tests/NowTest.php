<?php

namespace Koriym\Now;

class NowTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Now
     */
    protected $now;

    protected function setUp()
    {
        parent::setUp();
        $this->now = new Now(new \DateTime());
    }

    public function testNow()
    {
        $dateTime = '2015-11-09 01:00:00';
        $now = new Now(new \DateTime($dateTime));
        $this->assertSame($dateTime, (string) $now);
    }

    public function testFakeNow()
    {
        $fakeNow = new FakeNow;
        $expected = FakeNow::TIME;
        $this->assertSame($expected, (string) $fakeNow);
    }
}
