<?php

namespace Softspring\DoctrineTemplates\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Softspring\DoctrineTemplates\Entity\Traits\HAddressTrait;
use Softspring\DoctrineTemplates\Model\HAddressInterface;

/**
 * @ORM\Embeddable
 */
class HAddress extends Address implements HAddressInterface
{
    use HAddressTrait;
}