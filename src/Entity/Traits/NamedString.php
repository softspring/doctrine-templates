<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Named.
 */
trait NamedString
{
    /**
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    protected ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
