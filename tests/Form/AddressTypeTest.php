<?php

namespace Softspring\Component\DoctrineTemplates\Tests\Form;

use PHPUnit\Framework\TestCase;
use Softspring\Component\DoctrineTemplates\Entity\Embeddable\Address;
use Softspring\Component\DoctrineTemplates\Form\AddressType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Forms;

class AddressTypeTest extends TestCase
{
    public function testBuildsDefaultAddressFields(): void
    {
        $factory = Forms::createFormFactory();
        $form = $factory->create(AddressType::class, new Address());

        self::assertTrue($form->has('streetAddress'));
        self::assertTrue($form->has('extendedAddress'));
        self::assertTrue($form->has('postalCode'));
        self::assertTrue($form->has('locality'));
        self::assertTrue($form->has('region'));
        self::assertTrue($form->has('countryCode'));
        self::assertFalse($form->has('postOfficeBox'));

        self::assertInstanceOf(TextType::class, $form->get('streetAddress')->getConfig()->getType()->getInnerType());
        self::assertInstanceOf(CountryType::class, $form->get('countryCode')->getConfig()->getType()->getInnerType());
        self::assertSame('address-line1', $form->get('streetAddress')->getConfig()->getOption('attr')['autocomplete']);
        self::assertSame('address-line2', $form->get('extendedAddress')->getConfig()->getOption('attr')['autocomplete']);
    }

    public function testSupportsSingleAddressLineAndAutocompleteSection(): void
    {
        $factory = Forms::createFormFactory();
        $form = $factory->create(AddressType::class, new Address(), [
            'address_lines' => 1,
            'autocomplete_section' => 'shipping',
            'show_country' => false,
            'show_post_office_box' => true,
        ]);

        self::assertTrue($form->has('streetAddress'));
        self::assertFalse($form->has('extendedAddress'));
        self::assertFalse($form->has('countryCode'));
        self::assertTrue($form->has('postOfficeBox'));
        self::assertSame('shipping street-address', $form->get('streetAddress')->getConfig()->getOption('attr')['autocomplete']);
    }

    public function testAllowsRestrictingCountryChoices(): void
    {
        $factory = Forms::createFormFactory();
        $form = $factory->create(AddressType::class, new Address(), [
            'country_choices' => ['ES', 'FR'],
        ]);

        $choices = $form->get('countryCode')->getConfig()->getOption('choices');

        self::assertSame(['ES', 'FR'], array_values($choices));
        self::assertCount(2, $choices);
        self::assertNull($form->get('countryCode')->getConfig()->getOption('choice_loader'));
    }
}
