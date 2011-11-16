<?php 

namespace Charlie\WebsiteBundle\Tests\Fixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Charlie\WebsiteBundle\Entity\Offerta;

class LoadOfferData implements FixtureInterface
{
    public function load($manager)
    {
        for ($i = 0; $i < 300; $i++) {
            $offerta = new Offerta();
            $offerta->setTitolo('Web analyst '.$i);
            $offerta->setDescrizione('Una buona offerta, la numero '.$i);
            $offerta->setSede('Milano');
            $offerta->setSalario(50000 + 1000 * $i);

            $manager->persist($offerta);
        }
        
        $manager->flush();
    }
}