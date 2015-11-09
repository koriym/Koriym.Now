<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\Now;

final class Now implements NowInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $dateTime;

    public function __construct(\DateTimeInterface $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function __toString()
    {
        return $this->dateTime->format('Y-m-d H:i:s');
    }
}
