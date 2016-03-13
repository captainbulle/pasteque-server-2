<?php

namespace Pasteque\Bundle\ServerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AttributeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/attribute/getAll');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
