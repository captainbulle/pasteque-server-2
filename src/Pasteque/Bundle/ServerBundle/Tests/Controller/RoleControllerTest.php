<?php

namespace Pasteque\Bundle\ServerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoleControllerTest extends WebTestCase
{
    public function testGetRole()
    {
        $client = static::createClient();

        $client->request('GET', '/role/getAll');

        var_dump($client->getResponse());

       // $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}