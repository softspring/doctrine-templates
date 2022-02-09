<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

trait ToStringIdTrait
{
    public function __toString(): string
    {
        return "{$this->getId()}";
    }
}
