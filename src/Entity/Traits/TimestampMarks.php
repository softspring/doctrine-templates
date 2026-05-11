<?php

declare(strict_types=1);

namespace Softspring\Component\DoctrineTemplates\Entity\Traits;

/**
 * Trait TimestampMarks.
 */
trait TimestampMarks
{
    use CreatedAt;

    use UpdatedAt;
}
