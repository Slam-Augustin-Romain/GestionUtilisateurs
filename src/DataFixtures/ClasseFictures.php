<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Classe;
use App\Entity\Diplome;
use App\Entity\TypeFormation;
use App\Entity\EtablissementOrigine;
use App\Entity\EnseignementComp;

class ClasseFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //Formations
        $TypeFormation1 = new TypeFormation();
        $TypeFormation1->setnom_type_formation (['Informatique']);
        $manager->persist($TypeFormation1);
        
        $TypeFormation2 = new TypeFormation();
        $TypeFormation2->setnom_type_formation(['Économie']);
        $manager->persist($TypeFormation2);

        $TypeFormation3 = new TypeFormation();
        $TypeFormation3->setnom_type_formation(['Gestion']);
        $manager->persist($TypeFormation3);
        
        //Diplomes
        
        $Diplome1 = new Diplome();
        $Diplome1->settypeformation_id($TypeFormation1);
        $Diplome1->setnom_diplome(['BTS-SIO']);
        $Diplome1->setactive(1);
        $manager->persist($Diplome1);

        $Diplome2 = new Diplome();
        $Diplome2->settypeformation_id($TypeFormation2);
        $Diplome2->setnom_diplome(['BTS-SAM']);
        $Diplome2->setactive(1);
        $manager->persist($Diplome2);

        $Diplome3 = new Diplome();
        $Diplome3->settypeformation_id($TypeFormation3);
        $Diplome3->setnom_diplome(['BTS-GPME']);
        $Diplome3->setactive(1);
        $manager->persist($Diplome3);
        
        //Classes
        
        $Classe1 = new Classe();
        $Classe1->setdiplome_id($Diplome1);
        $Classe1->setnom_classe(['SIO-1']);
        $manager->persist($Classe1);

        $Classe2 = new Classe();
        $Classe2->setdiplome_id($Diplome2);
        $Classe2->setnom_classe(['SAM-1']);
        $manager->persist($Classe2);

        $Classe3 = new Classe();
        $Classe3->setdiplome_id($Diplome3);
        $Classe3->setnom_classe(['GPME-1']);
        $manager->persist($Classe3);

        //EtablissementOrigine

        $EtablissementOrigine1 = new EtablissementOrigine();
        $EtablissementOrigine1->setnom_etablissement_origine (['Informatique']);
        $manager->persist($EtablissementOrigine1);
        
        $EtablissementOrigine2 = new EtablissementOrigine();
        $EtablissementOrigine2->setnom_etablissement_origine(['Économie']);
        $manager->persist($EtablissementOrigine2);

        $EtablissementOrigine3 = new EtablissementOrigine();
        $EtablissementOrigine3->setnom_etablissement_origine(['Gestion']);
        $manager->persist($EtablissementOrigine3);

        $manager->flush();
    }
}
