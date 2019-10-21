<?php

namespace Softspring\DoctrineTemplates\Form;

use Softspring\DoctrineTemplates\Model\AddressInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Intl\Countries;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AddressInterface::class,
            'country_choices' => null,
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

        $countryCodeOptions = [];

        if ($options['country_choices']) {
            foreach ($options['country_choices'] as $countryCode) {
                $countryCodeOptions['choices'][Countries::getNames()[$countryCode]] = $countryCode;
            }

            $countryCodeOptions['choice_loader'] = null;
        }

        $builder->add('countryCode', CountryType::class, $countryCodeOptions);
    }
}