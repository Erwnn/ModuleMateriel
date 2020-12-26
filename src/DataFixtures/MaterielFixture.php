<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Materiel;

class MaterielFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $materiels = [

            $materiel1 = new Materiel(),
            $materiel1->setNom('NAS Synology DS220J')->setPrix(180.99)->setQuantite(3)->setCreatedAt(new \DateTime()),
            $materiel2 = new Materiel(),
            $materiel2->setNom('NAS Synology DS120J')->setPrix(99.99)->setQuantite(5)->setCreatedAt(new \DateTime()),
            $materiel3 = new Materiel(),
            $materiel3->setNom('Seagate 3.5" Barracuda 2To (ST2000DM008)')->setPrix(59.00)->setQuantite(8)->setCreatedAt(new \DateTime()),
            $materiel4 = new Materiel(),
            $materiel4->setNom('Seagate 3.5" IronWolf 2To (ST2000VNZ04)')->setPrix(89.00)->setQuantite(2)->setCreatedAt(new \DateTime()),
            $materiel5 = new Materiel(),
            $materiel5->setNom('WD Blue SSD 2.5" 500Go')->setPrix(69.99)->setQuantite(4)->setCreatedAt(new \DateTime()),
            $materiel6 = new Materiel(),
            $materiel6->setNom('Kaspersky Anti-Virus 2021 1 Appareil')->setPrix(29.90)->setQuantite(7)->setCreatedAt(new \DateTime()),
            $materiel7 = new Materiel(),
            $materiel7->setNom('Kaspersky Internet Security 2021 1 Appareil')->setPrix(49.99)->setQuantite(4)->setCreatedAt(new \DateTime()),
            $materiel8 = new Materiel(),
            $materiel8->setNom('Kaspersky Total Security 2021 3 Appareils')->setPrix(79.99)->setQuantite(5)->setCreatedAt(new \DateTime()),

        ];

        foreach ($materiels as $materiel) {
            $manager->persist($materiel);
        }
        $manager->flush();
    }
}
