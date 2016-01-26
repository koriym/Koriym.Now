<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\Now;

use Ray\Di\ProviderInterface;

class NowProvider implements ProviderInterface
{
    /**
     * @inheritDoc
     */
    public function get()
    {
        return new Now(new \DateTime);
    }
}
