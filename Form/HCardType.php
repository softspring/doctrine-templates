<?php

namespace Softspring\DoctrineTemplates\Form;

use Softspring\DoctrineTemplates\Model\HCardInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HCardType extends HAddressType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HCardInterface::class,
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('surname');
        $builder->add('tel');
    }
}