<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait SlugTrait.
 */
trait SlugTrait
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="slug", type="string", nullable=false, length=100)
     */
    protected $slug;

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }
}
