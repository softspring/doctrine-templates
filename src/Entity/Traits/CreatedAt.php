<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait CreatedAt
{
    #[ORM\Column(type: 'datetimetz', nullable: true)]
    protected DateTime $createdAt;

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    #[ORM\PrePersist]
    public function autoSetCreatedAt(): void
    {
        $this->createdAt = new DateTime('now');
    }
}
