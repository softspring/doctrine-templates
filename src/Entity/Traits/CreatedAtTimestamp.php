<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait CreatedAtTimestamp
{
    #[ORM\Column(type: 'integer', nullable: true)]
    protected ?int $createdAt = null;

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt ? DateTime::createFromFormat('U', (string) $this->createdAt) : null;
    }

    #[ORM\PrePersist]
    public function autoSetCreatedAt(): void
    {
        $this->createdAt = time();
    }
}
