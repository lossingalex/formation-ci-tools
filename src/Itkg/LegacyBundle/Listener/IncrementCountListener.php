<?php

namespace Itkg\LegacyBundle\Listener;

use Itkg\LegacyBundle\Event\DemoEvent;

/**
 * Class IncrementCountListener
 */
class IncrementCountListener
{
    /**
     * @param DemoEvent $event
     */
    public function execute(DemoEvent $event)
    {
        var_dump('listener');
        $demo = $event->getDemo();
        $demo->setCount($demo->getCount() + 1);
    }
}
