<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Softspring\Component\DoctrineTemplates\Entity\Traits\HAddressTrait;
use Softspring\Component\DoctrineTemplates\Model\HAddressInterface;

/**
 * @ORM\Embeddable
 */
class HAddress extends Address implements HAddressInterface
{
    use HAddressTrait;
}
