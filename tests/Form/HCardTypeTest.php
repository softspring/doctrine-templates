<?php

namespace Softspring\Component\DoctrineTemplates\Tests\Form;

use PHPUnit\Framework\TestCase;
use Softspring\Component\DoctrineTemplates\Entity\Embeddable\HCard;
use Softspring\Component\DoctrineTemplates\Form\HCardType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Forms;

class HCardTypeTest extends TestCase
{
    public function testBuildsContactCardFieldsOnTopOfAddressFields(): void
    {
        $factory = Forms::createFormFactory();
        $form = $factory->create(HCardType::class, new HCard(), [
            'autocomplete_section' => 'billing',
        ]);

        self::assertTrue($form->has('name'));
        self::assertTrue($form->has('surname'));
        self::assertTrue($form->has('tel'));
        self::assertTrue($form->has('streetAddress'));
        self::assertTrue($form->has('countryCode'));

        self::assertInstanceOf(TextType::class, $form->get('name')->getConfig()->getType()->getInnerType());
        self::assertInstanceOf(TextType::class, $form->get('surname')->getConfig()->getType()->getInnerType());
        self::assertInstanceOf(TelType::class, $form->get('tel')->getConfig()->getType()->getInnerType());
        self::assertSame('billing given-name', $form->get('name')->getConfig()->getOption('attr')['autocomplete']);
        self::assertSame('billing family-name', $form->get('surname')->getConfig()->getOption('attr')['autocomplete']);
        self::assertSame('billing tel', $form->get('tel')->getConfig()->getOption('attr')['autocomplete']);
    }
}
