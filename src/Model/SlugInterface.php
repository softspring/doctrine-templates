<?php

namespace Softspring\DoctrineTemplates\Model;

interface SlugInterface
{
    /**
     * @return string|null
     */
    public function getSlug(): ?string;

    /**
     * @param string|null $slug
     */
    public function setSlug(?string $slug): void;
}