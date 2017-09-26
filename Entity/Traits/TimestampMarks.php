<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait TimestampMarks
 */
trait TimestampMarks
{
    use CreatedAt;

    use UpdatedAt;
}