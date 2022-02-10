<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait UpdatedAt
{
    /**
     * @ORM\Column(type="datetimetz", nullable=true)
     */
    protected \DateTime $updatedAt;

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function autoSetUpdatedAt()
    {
        $this->updatedAt = new \DateTime('now');
    }
}
