<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait UniqIdString
{
    /**
     * @ORM\Id
     * @ORM\Column(length=13, options={"fixed": true})
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected ?string $id = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @ORM\PrePersist()
     */
    public function _generateId()
    {
        $this->id = uniqid();
    }
}
