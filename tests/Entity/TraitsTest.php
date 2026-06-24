<?php

namespace Softspring\Component\DoctrineTemplates\Tests\Entity;

use DateTime;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;
use Softspring\Component\DoctrineTemplates\Entity\Traits\AutoId;
use Softspring\Component\DoctrineTemplates\Entity\Traits\CreatedAt;
use Softspring\Component\DoctrineTemplates\Entity\Traits\CurrencyTrait;
use Softspring\Component\DoctrineTemplates\Entity\Traits\KeyIdTrait;
use Softspring\Component\DoctrineTemplates\Entity\Traits\Named;
use Softspring\Component\DoctrineTemplates\Entity\Traits\NamedString;
use Softspring\Component\DoctrineTemplates\Entity\Traits\SlugTrait;
use Softspring\Component\DoctrineTemplates\Entity\Traits\TimestampMarks;
use Softspring\Component\DoctrineTemplates\Entity\Traits\Timestamps;
use Softspring\Component\DoctrineTemplates\Entity\Traits\ToStringIdTrait;
use Softspring\Component\DoctrineTemplates\Entity\Traits\UniqId;
use Softspring\Component\DoctrineTemplates\Entity\Traits\UniqIdString;

class TraitsTest extends TestCase
{
    public function testNamedTraitStoresName(): void
    {
        $entity = new class {
            use Named;
        };

        self::assertNull($entity->getName());

        $entity->setName('Public name');

        self::assertSame('Public name', $entity->getName());
    }

    public function testNamedStringTraitStoresName(): void
    {
        $entity = new class {
            use NamedString;
        };

        self::assertNull($entity->getName());

        $entity->setName('String name');

        self::assertSame('String name', $entity->getName());
    }

    public function testSlugTraitStoresSlug(): void
    {
        $entity = new class {
            use SlugTrait;
        };

        self::assertNull($entity->getSlug());

        $entity->setSlug('public-slug');

        self::assertSame('public-slug', $entity->getSlug());
    }

    public function testCurrencyTraitStoresCurrency(): void
    {
        $entity = new class {
            use CurrencyTrait;
        };

        self::assertNull($entity->getCurrency());

        $entity->setCurrency('EUR');

        self::assertSame('EUR', $entity->getCurrency());
    }

    public function testKeyIdTraitStoresId(): void
    {
        $entity = new class {
            use KeyIdTrait;
        };

        self::assertNull($entity->getId());

        $entity->setId('content');

        self::assertSame('content', $entity->getId());
    }

    public function testUniqIdTraitGeneratesId(): void
    {
        $entity = new class {
            use UniqId;
        };

        $entity->_generateId();

        self::assertIsString($entity->getId());
        self::assertSame(13, strlen($entity->getId()));
    }

    public function testUniqIdStringTraitGeneratesId(): void
    {
        $entity = new class {
            use UniqIdString;
        };

        self::assertNull($entity->getId());

        $entity->_generateId();

        self::assertIsString($entity->getId());
        self::assertSame(13, strlen($entity->getId()));
    }

    public function testAutoIdTraitReturnsStoredId(): void
    {
        $entity = new class {
            use AutoId;
        };

        $this->setProtectedProperty($entity, 'id', 123);

        self::assertSame(123, $entity->getId());
    }

    public function testToStringIdTraitConvertsIdToString(): void
    {
        $entity = new class {
            use ToStringIdTrait;

            public function getId(): int
            {
                return 123;
            }
        };

        self::assertSame('123', (string) $entity);
    }

    public function testCreatedAtTraitSetsCreationTime(): void
    {
        $entity = new class {
            use CreatedAt;
        };

        $entity->autoSetCreatedAt();

        self::assertInstanceOf(DateTime::class, $entity->getCreatedAt());
    }

    public function testTimestampMarksTraitSetsCreationAndUpdateTimes(): void
    {
        $entity = new class {
            use TimestampMarks;
        };

        $entity->autoSetCreatedAt();
        $entity->autoSetUpdatedAt();

        self::assertInstanceOf(DateTime::class, $entity->getCreatedAt());
        self::assertInstanceOf(DateTime::class, $entity->getUpdatedAt());
    }

    public function testTimestampsTraitSetsCreationAndUpdateTimestamps(): void
    {
        $entity = new class {
            use Timestamps;
        };

        self::assertNull($entity->getCreatedAt());
        self::assertNull($entity->getUpdatedAt());

        $entity->autoSetCreatedAt();
        $entity->autoSetUpdatedAt();

        self::assertInstanceOf(DateTime::class, $entity->getCreatedAt());
        self::assertInstanceOf(DateTime::class, $entity->getUpdatedAt());
    }

    private function setProtectedProperty(object $object, string $property, mixed $value): void
    {
        $reflectionProperty = new ReflectionProperty($object, $property);
        $reflectionProperty->setValue($object, $value);
    }
}
