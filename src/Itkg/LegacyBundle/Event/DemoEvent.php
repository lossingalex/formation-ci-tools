<?php

namespace Itkg\LegacyBundle\Event;

use Itkg\LegacyBundle\Entity\Demo;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class DemoEvent
 */
class DemoEvent extends Event
{
    protected $demo;

    /**
     * @param Demo $demo
     */
    public function __construct(Demo $demo)
    {
        $this->demo = $demo;
    }

    /**
     * @return Demo
     */
    public function getDemo()
    {
        return $this->demo;
    }
}
