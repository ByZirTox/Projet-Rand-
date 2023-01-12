<?php

namespace App\DataFixtures;

use App\Entity\Accident;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AccidentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i <= 8; $i++) {
            $accident = new Accident();
            $accident->setUser($this->getReference('user_' . $i));
            $manager->persist($accident);
        }
        $manager->flush();
    }

    public function getDependencies()
    {

        return [

            VehiculesFixtures::class,

        ];
    }
}
