<?php

namespace OuisendAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComplaintType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('content')
            ->add('creationDate')
            ->add('actionTaken')
            ->add('handlingDate')
            ->add('update_date')
            ->add('account')
            ->add('operation')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OuisendAdminBundle\Entity\Complaint'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ouisendadminbundle_complaint';
    }
}
