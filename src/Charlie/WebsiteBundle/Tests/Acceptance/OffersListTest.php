<?php

namespace Charlie\WebsiteBundle\Tests\Acceptance;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class OffersListTest extends WebTestCase
{
    
    public function setUp()
    {
        $this->loadFixtures('Charlie\WebsiteBundle\Tests\Fixtures\LoadOfferData');
    }
    
    public function testList()
    {
        $client = static::createClient();

        $dom = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertEquals(300, $dom->filter('.offerta')->count());
        $this->assertEquals(300, $dom->filter('.offerta .titolo')->count());
        $this->assertEquals(300, $dom->filter('.offerta .descrizione')->count());
        $this->assertEquals(300, $dom->filter('.offerta .salario')->count());
        $this->assertEquals(300, $dom->filter('.offerta .sede')->count());
    }
}
