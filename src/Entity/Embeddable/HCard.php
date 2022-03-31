<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Softspring\Component\DoctrineTemplates\Entity\Traits\HCardTrait;
use Softspring\Component\DoctrineTemplates\Model\HCardInterface;

/**
 * @ORM\Embeddable
 */
class HCard extends HAddress implements HCardInterface
{
    use HCardTrait;
}
