<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait HCardTrait.
 */
trait HCardTrait
{
    use HAddressTrait;

    /**
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    protected ?string $name;

    /**
     * @ORM\Column(name="surname", type="string", length=100, nullable=true)
     */
    protected ?string $surname;

    /**
     * @ORM\Column(name="tel", type="string", length=20, nullable=true)
     */
    protected ?string $tel;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): void
    {
        $this->tel = $tel;
    }
}
