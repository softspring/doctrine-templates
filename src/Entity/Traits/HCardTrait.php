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
     * @var string|null
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    protected $name;

    /**
     * @var string|null
     * @ORM\Column(name="surname", type="string", length=100, nullable=true)
     */
    protected $surname;

    /**
     * @var string|null
     * @ORM\Column(name="tel", type="string", length=20, nullable=true)
     */
    protected $tel;

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
