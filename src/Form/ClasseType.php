<?php

namespace App\Form;

use App\Entity\Classe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\Diplome;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
//use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ClasseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_classe')
            // ->add('diplome')
        ;

        // $builder->add('diplome', CollectionType::class, array(
        //     'entry_type' => DiplomeType::class,
        //     'entry_options' => array(
        //         'label' => false,
        //     )
        // ));
        $builder->add('diplome', EntityType::class, array(
            'class' => Diplome::class,
            'choice_label' => 'nom_diplome',
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Classe::class,
        ]);
    }
}
