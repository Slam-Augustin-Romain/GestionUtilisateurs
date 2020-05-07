<?php

namespace App\DataFixtures;

use App\Entity\Eleves;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\DataFixtures\AdministrationFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ElevesFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return array(
            AdministrationFixtures::class,
        );
    }
    
    public function load(ObjectManager $manager)
    {

        // //Les SIO-1
        // $eleve1SIO = new Eleves();
        // $eleve1SIO->setClasse($classe1);
        // $eleve1SIO->setEnseignementComp($enseignementComp1);
        // $eleve1SIO->setNom('Pastel');
        // $eleve1SIO->setPrenom('Richard');
        // $eleve1SIO->setSexe('Homme');
        // $eleve1SIO->setDatenaissance(1975-04-01);
        // $eleve1SIO->setStatut('Vivant');
        // $eleve1SIO->setLv2('Italien');
        // $eleve1SIO->setRemarque('');
        // $eleve1SIO->setAmenagementPedagogique('Non');
        // $manager->persist($eleve1SIO);

        $manager->flush();
    }
}
