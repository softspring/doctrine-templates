<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait SlugTrait.
 */
trait SlugTrait
{
    #[ORM\Column(name: 'slug', type: 'string', length: 100, nullable: false)]
    protected ?string $slug = null;

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }
}
