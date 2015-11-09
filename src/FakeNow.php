<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\Now;

final class FakeNow
{
    const TIME = '1970-01-01 00:00:00';

    public function __toString()
    {
        return (new \DateTime(self::TIME))->format('Y-m-d H:i:s');
    }
}
