<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait CreatedAtTimestamp
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $createdAt = null;

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt ? \DateTime::createFromFormat('U', $this->createdAt) : null;
    }

    /**
     * @ORM\PrePersist()
     */
    public function autoSetCreatedAt()
    {
        $this->createdAt = time();
    }
}
