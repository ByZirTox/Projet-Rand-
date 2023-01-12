<?php

namespace App\DataFixtures;

use App\Entity\Amendes;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AmendesFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i <= 8; $i++) {
            $amendes = new Amendes();
            $amendes->setUser($this->getReference('user_' . $i));
            $manager->persist($amendes);
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
