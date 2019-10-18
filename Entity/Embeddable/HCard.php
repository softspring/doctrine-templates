<?php

namespace Softspring\DoctrineTemplates\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Softspring\DoctrineTemplates\Entity\Traits\HCardTrait;
use Softspring\DoctrineTemplates\Model\HCardInterface;

/**
 * @ORM\Embeddable
 */
class HCard extends HAddress implements HCardInterface
{
    use HCardTrait;
}