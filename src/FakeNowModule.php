<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\Now;

use Ray\Di\AbstractModule;

class FakeNowModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(NowInterface::class)->to(FakeNow::class);
    }
}
