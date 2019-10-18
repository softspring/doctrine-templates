<?php

namespace Softspring\DoctrineTemplates\Form;

use Softspring\DoctrineTemplates\Model\AddressInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AddressInterface::class,
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('streetAddress');
        $builder->add('extendedAddress');
        $builder->add('postOfficeBox');
        $builder->add('postalCode');
        $builder->add('region');
        $builder->add('locality');
        $builder->add('countryCode');
    }
}