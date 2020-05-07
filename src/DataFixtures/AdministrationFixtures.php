<?php

namespace App\DataFixtures;

use DateTime;

use App\Entity\Classe;

use App\Entity\Eleves;
use App\Entity\Diplome;
use App\Entity\TypeFormation;
use App\Entity\EnseignementComp;
use App\Entity\EtablissementOrigine;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AdministrationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);


        //Formations
        $typeFormation1 = new TypeFormation();
        $typeFormation1->setNomTypeFormation('Informatique');
        $manager->persist($typeFormation1);

        $typeFormation2 = new TypeFormation();
        $typeFormation2->setNomTypeFormation('Économie');
        $manager->persist($typeFormation2);

        $typeFormation3 = new TypeFormation();
        $typeFormation3->setNomTypeFormation('Gestion');
        $manager->persist($typeFormation3);


        //Diplomes
        $diplome1 = new Diplome();
        $diplome1->setTypeformation($typeFormation1);
        $diplome1->setNomDiplome('BTS-SIO');
        $diplome1->setactive(1);
        $manager->persist($diplome1);

        $diplome2 = new Diplome();
        $diplome2->setTypeformation($typeFormation2);
        $diplome2->setNomDiplome('BTS-SAM');
        $diplome2->setactive(1);
        $manager->persist($diplome2);

        $diplome3 = new Diplome();
        $diplome3->setTypeformation($typeFormation3);
        $diplome3->setNomDiplome('BTS-GPME');
        $diplome3->setactive(1);
        $manager->persist($diplome3);


        //Classes
        $classe1 = new Classe();
        $classe1->setDiplome($diplome1);
        $classe1->setNomClasse('SIO-1');
        $manager->persist($classe1);

        $classe2 = new Classe();
        $classe2->setDiplome($diplome2);
        $classe2->setNomClasse('SAM-1');
        $manager->persist($classe2);

        $classe3 = new Classe();
        $classe3->setDiplome($diplome3);
        $classe3->setNomClasse('GPME-1');
        $manager->persist($classe3);


        //EtablissementOrigine
        $etablissementOrigine1 = new EtablissementOrigine();
        $etablissementOrigine1->setNommEtablissementOrigine('NDLP');
        $manager->persist($etablissementOrigine1);

        $etablissementOrigine2 = new EtablissementOrigine();
        $etablissementOrigine2->setNommEtablissementOrigine('LaMo');
        $manager->persist($etablissementOrigine2);

        $etablissementOrigine3 = new EtablissementOrigine();
        $etablissementOrigine3->setNommEtablissementOrigine('Litté');
        $manager->persist($etablissementOrigine3);


        //EnseignementComp
        $enseignementComp1 = new EnseignementComp();
        $enseignementComp1->setDiplome($diplome1);
        $enseignementComp1->setNomEnseignementComp('Sup-SIO');
        $manager->persist($enseignementComp1);

        $enseignementComp2 = new EnseignementComp();
        $enseignementComp2->setDiplome($diplome2);
        $enseignementComp2->setNomEnseignementComp('Sup-SAM');
        $manager->persist($enseignementComp2);

        $enseignementComp3 = new EnseignementComp();
        $enseignementComp3->setDiplome($diplome3);
        $enseignementComp3->setNomEnseignementComp('Sup-GPME');
        $manager->persist($enseignementComp3);


        //Les SIO-1
        $eleve1SIO = new Eleves();
        $eleve1SIO->setClasse($classe1);
        $eleve1SIO->setEnseignementComp($enseignementComp1);
        $eleve1SIO->setNom('Pastel');
        $eleve1SIO->setPrenom('Richard');
        $eleve1SIO->setSexe('Homme');
        $eleve1SIO->setDatenaissance(new DateTime(1975-04-01));
        $eleve1SIO->setStatut('Vivant');
        $eleve1SIO->setLv2('Italien');
        $eleve1SIO->setRemarque('');
        $eleve1SIO->setAmenagementPedagogique('Non');
        $manager->persist($eleve1SIO);



        $manager->flush();
    }
}
