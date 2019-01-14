<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait UpdatedAtTimestamp
{
    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $updatedAt;

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt ? \DateTime::createFromFormat("U", $this->updatedAt) : null;
    }

    /**
     * @ORM\PrePersist()
     */
    public function autoSetUpdatedAt()
    {
        $this->updatedAt = time();
    }
}