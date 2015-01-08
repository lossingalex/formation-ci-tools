<?php

namespace Itkg\LegacyBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DemoControllerTest extends WebTestCase
{
    public function testDemo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/demo');
    }

}
