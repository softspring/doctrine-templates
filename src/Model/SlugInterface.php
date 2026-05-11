<?php

declare(strict_types=1);

namespace Softspring\Component\DoctrineTemplates\Model;

interface SlugInterface
{
    public function getSlug(): ?string;

    public function setSlug(?string $slug): void;
}
