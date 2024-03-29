<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait UniqId
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(length=13, options={"fixed": true})
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $id;

    public function getId()
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
