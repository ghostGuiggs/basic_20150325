<?php

namespace OuisendAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('type')
            ->add('creationDate')
            ->add('updateDate')
            ->add('sender')
            ->add('receiver')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OuisendAdminBundle\Entity\Message'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ouisendadminbundle_message';
    }
}
