<?php

namespace Itkg\LegacyBundle\Subscriber;

use Itkg\LegacyBundle\DemoEvents;
use Itkg\LegacyBundle\Event\DemoEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class IncrementCountSubscriber
 */
class IncrementCountSubscriber implements EventSubscriberInterface
{
    /**
     * @param DemoEvent $event
     */
    public function execute(DemoEvent $event)
    {
        var_dump('scubscriber');
        $demo = $event->getDemo();
        $demo->setCount($demo->getCount() + 1);
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            DemoEvents::DISPLAY => array('execute', 10),
        );
    }

}
