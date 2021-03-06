<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait KeyId
 */
trait KeyIdTrait
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=false, length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $id;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
}