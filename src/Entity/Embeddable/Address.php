<?php

namespace Softspring\DoctrineTemplates\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Softspring\DoctrineTemplates\Entity\Traits\AddressTrait;
use Softspring\DoctrineTemplates\Model\AddressInterface;

/**
 * @ORM\Embeddable
 */
class Address implements AddressInterface
{
    use AddressTrait;
}
