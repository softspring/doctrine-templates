<?php

namespace Softspring\Component\DoctrineTemplates\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Softspring\Component\DoctrineTemplates\Entity\Embeddable\Address;
use Softspring\Component\DoctrineTemplates\Entity\Embeddable\HAddress;
use Softspring\Component\DoctrineTemplates\Entity\Embeddable\HCard;
use Softspring\Component\DoctrineTemplates\Model\AddressInterface;
use Softspring\Component\DoctrineTemplates\Model\HAddressInterface;
use Softspring\Component\DoctrineTemplates\Model\HCardInterface;

class EmbeddableTest extends TestCase
{
    public function testAddressImplementsContractAndStoresValues(): void
    {
        $address = new Address();
        $address->setStreetAddress('Main Street 1');
        $address->setExtendedAddress('Floor 2');
        $address->setLocality('Madrid');
        $address->setRegion('Madrid');
        $address->setPostalCode('28001');
        $address->setCountryCode('ES');
        $address->setPostOfficeBox('Box 4');

        self::assertInstanceOf(AddressInterface::class, $address);
        self::assertSame('Main Street 1', $address->getStreetAddress());
        self::assertSame('Floor 2', $address->getExtendedAddress());
        self::assertSame('Madrid', $address->getLocality());
        self::assertSame('Madrid', $address->getRegion());
        self::assertSame('28001', $address->getPostalCode());
        self::assertSame('ES', $address->getCountryCode());
        self::assertSame('Box 4', $address->getPostOfficeBox());
    }

    public function testHAddressImplementsContract(): void
    {
        self::assertInstanceOf(HAddressInterface::class, new HAddress());
    }

    public function testHCardImplementsContractAndStoresContactValues(): void
    {
        $card = new HCard();
        $card->setName('Ada');
        $card->setSurname('Lovelace');
        $card->setTel('+34 555 1234');

        self::assertInstanceOf(HCardInterface::class, $card);
        self::assertSame('Ada', $card->getName());
        self::assertSame('Lovelace', $card->getSurname());
        self::assertSame('+34 555 1234', $card->getTel());
    }
}
