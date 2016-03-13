<?php

namespace Pasteque\Bundle\APIBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use GuzzleHttp\Client as Client;

class AttributeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        // Create a client with a base URI
        $client = new Client(['base_uri' => 'https://pasteque-server-2.com/api/']);

        // Send a request to https://pasteque-server-2.com/api/test
        $response = $client->request('GET', 'test');

        // Send a request to https://pasteque-server-2.com/root
        $response = $client->request('GET', '/root');
    }
}
