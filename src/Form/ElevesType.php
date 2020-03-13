<?php

namespace App\Form;

use App\Entity\Eleves;
use App\Entity\Classe;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ElevesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe')
            ->add('date_naissance')
            ->add('statut')
            ->add('lv2')
            ->add('remarque')
            ->add('amenagement_pedagogique')
            // ->add('classe')
            ->add('enseignementcomp')
        ;

        $builder->add('classe', EntityType::class, array(
            'class' => Classe::class,
            'choice_label' => 'longname',
            'multiple' => true
        ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Eleves::class,
        ]);
    }
}
