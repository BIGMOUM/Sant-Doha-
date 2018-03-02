<?php

namespace MailBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MailControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/indexMail');
    }

    public function testSuccessmail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/successMail');
    }

}
