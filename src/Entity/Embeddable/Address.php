<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Softspring\Component\DoctrineTemplates\Entity\Traits\AddressTrait;
use Softspring\Component\DoctrineTemplates\Model\AddressInterface;

/**
 * @ORM\Embeddable
 */
class Address implements AddressInterface
{
    use AddressTrait;
}
