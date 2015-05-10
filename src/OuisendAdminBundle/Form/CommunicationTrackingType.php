<?php

namespace OuisendAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommunicationTrackingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject')
            ->add('content')
            ->add('content_html')
            ->add('content_text')
            ->add('creation_date')
            ->add('sendDate')
            ->add('updateDate')
            ->add('from')
            ->add('to')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OuisendAdminBundle\Entity\CommunicationTracking'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ouisendadminbundle_communicationtracking';
    }
}
