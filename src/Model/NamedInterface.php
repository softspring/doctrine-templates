<?php

namespace Softspring\DoctrineTemplates\Model;

interface NamedInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;
}
