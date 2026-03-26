<?php

namespace Softspring\Component\DoctrineTemplates\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Softspring\Component\DoctrineTemplates\Entity\Traits\CreatedAtTimestamp;
use Softspring\Component\DoctrineTemplates\Entity\Traits\UpdatedAtTimestamp;

class TimestampsTraitTest extends TestCase
{
    public function testCreatedAtTimestampTraitSetsCreationTime(): void
    {
        $entity = new class {
            use CreatedAtTimestamp;
        };

        self::assertNull($entity->getCreatedAt());

        $entity->autoSetCreatedAt();

        self::assertNotNull($entity->getCreatedAt());
    }

    public function testUpdatedAtTimestampTraitSetsUpdateTime(): void
    {
        $entity = new class {
            use UpdatedAtTimestamp;
        };

        self::assertNull($entity->getUpdatedAt());

        $entity->autoSetUpdatedAt();

        self::assertNotNull($entity->getUpdatedAt());
    }
}
