<?php

declare(strict_types=1);

namespace Softspring\Component\DoctrineTemplates\Model;

interface NamedInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;
}
