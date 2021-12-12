<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait CurrencyTrait
{
    /**
     * @var string|null
     * @ORM\Column(name="currency", type="string", length=3, nullable=true, options={"fixed":true,"default":"EUR"})
     */
    protected $currency;

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }
}