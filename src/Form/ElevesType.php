<?php

namespace App\Form;

use App\Entity\Eleves;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ElevesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe');
        // ->add('date_naissance')
        $builder->add('date_naissance', DateType::class, [
            'widget' => 'single_text',
        
            // prevents rendering it as type="date", to avoid HTML5 date pickers
            'html5' => true,
        
            // adds a class that can be selected in JavaScript
            'attr' => ['class' => 'js-datepicker'],
        ]);
        $builder->add('statut')
            ->add('lv2')
            ->add('remarque')
            ->add('amenagement_pedagogique')
            ->add('classe')
            ->add('enseignementcomp')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Eleves::class,
        ]);
    }
}
