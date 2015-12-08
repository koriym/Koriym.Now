<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\Now;

trait NowInject
{
    /**
     * @var string
     */
    protected $now;

    /**
     * @param NowInterface $now
     *
     * @Ray\Di\Di\Inject
     */
    public function setNow(NowInterface $now)
    {
        $this->now = (string) $now;
    }
}
