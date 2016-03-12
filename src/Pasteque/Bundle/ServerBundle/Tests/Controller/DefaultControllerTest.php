<?php

namespace Pasteque\Bundle\ServerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use GuzzleHttp\Client as Client;

class AttributeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        /*$client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('Hello World', $client->getResponse()->getContent());*/

        // Create a client with a base URI
        $client = new Client(['base_uri' => 'https://pasteque-server-2.com/api/']);

        // Send a request to https://pasteque-server-2.com/api/test
        $response = $client->request('GET', 'test');

        // Send a request to https://pasteque-server-2.com/root
        $response = $client->request('GET', '/root');
    }
}
