<?php

namespace Softspring\Component\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait KeyId.
 */
trait KeyIdTrait
{
    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 10, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    protected $id;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }
}
