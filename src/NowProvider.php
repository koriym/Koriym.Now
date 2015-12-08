<?php

namespace Koriym\Now;

use Ray\Di\ProviderInterface;

class NowProvider implements ProviderInterface
{
    /**
     * @inheritDoc
     */
    public function get()
    {
        return new \DateTime;
    }
}
