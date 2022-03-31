<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Traits;

trait ToStringIdTrait
{
    public function __toString(): string
    {
        return "{$this->getId()}";
    }
}
