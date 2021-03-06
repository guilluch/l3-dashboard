<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FicheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('projet')
            ->add('manager')
            ->add('projectName')
            ->add('ficheDate')
            ->add('nbDayDone')
            ->add('nbDaySold')
            ->add('progression')
            ->add('comment');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Fiche'
        ));
    }

    /**
     * {@inheritdoc} 
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fiche';
    }
}
