<?php

namespace Itkg\LegacyBundle\Controller;

use Itkg\LegacyBundle\DemoEvents;
use Itkg\LegacyBundle\Event\DemoEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/demo")
     * @Template()
     */
    public function demoAction()
    {
        $demoRepositoy = $this->get('doctrine')->getRepository('ItkgLegacyBundle:Demo');

        $demo = $demoRepositoy->find(1);

        $demoEvent = new DemoEvent($demo);

        $this->get('event_dispatcher')->dispatch(DemoEvents::DISPLAY, $demoEvent);

        return array(
            'demo' => $demo
            );    }

}
