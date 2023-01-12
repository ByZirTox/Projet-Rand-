<?php

namespace App\DataFixtures;

use App\Entity\Vehicules;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VehiculesFixtures extends Fixture 
{
    public function load(ObjectManager $manager): void
    {

        $vehicules = new Vehicules();
        $vehicules->setMarque('Tesla');
        $vehicules->setModele('Model 4');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_0', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();


        $vehicules = new Vehicules();
        $vehicules->setMarque('Peugeot');
        $vehicules->setModele('e-208');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_1', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();


        $vehicules = new Vehicules();
        $vehicules->setMarque('Dacia');
        $vehicules->setModele('Spring');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_2', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();


        $vehicules = new Vehicules();
        $vehicules->setMarque('Tesla');
        $vehicules->setModele('Model 3');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_3', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();


        $vehicules = new Vehicules();
        $vehicules->setMarque('Fiat');
        $vehicules->setModele('500e');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_4', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();


        $vehicules = new Vehicules();
        $vehicules->setMarque('MG');
        $vehicules->setModele('4');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_5', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();


        $vehicules = new Vehicules();
        $vehicules->setMarque('Hyundai');
        $vehicules->setModele('Kona Electric');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_6', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();


        $vehicules = new Vehicules();
        $vehicules->setMarque('Volkswagen');
        $vehicules->setModele('ID.4');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_7', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();

        $vehicules = new Vehicules();
        $vehicules->setMarque('Peugeot');
        $vehicules->setModele('e-207');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_8', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();

        $vehicules = new Vehicules();
        $vehicules->setMarque('Peugeot');
        $vehicules->setModele('e-206');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_9', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();

        $vehicules = new Vehicules();
        $vehicules->setMarque('Peugeot');
        $vehicules->setModele('e-106');
        $vehicules->setAnnee('2023');
        $vehicules->setStatus('disponible');
        $vehicules->setPrice('299');
        $this->addReference('vehicules_10', $vehicules);
        $manager->persist($vehicules);
        $manager->flush();
    }
}
