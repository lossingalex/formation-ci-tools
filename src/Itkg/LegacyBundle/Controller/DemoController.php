<?php

namespace Itkg\LegacyBundle\Controller;

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
        return array(
                // ...
            );    }

}
