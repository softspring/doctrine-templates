<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait AddressTrait.
 */
trait AddressTrait
{
    /**
     * @ORM\Column(name="post_office_box", type="string", length=100, nullable=true)
     */
    protected ?string $postOfficeBox = null;

    /**
     * @ORM\Column(name="street_address", type="string", length=100, nullable=true)
     */
    protected ?string $streetAddress = null;

    /**
     * @ORM\Column(name="extended_address", type="string", length=100, nullable=true)
     */
    protected ?string $extendedAddress = null;

    /**
     * @ORM\Column(name="locality", type="string", length=100, nullable=true)
     */
    protected ?string $locality = null;

    /**
     * @ORM\Column(name="region", type="string", length=100, nullable=true)
     */
    protected ?string $region = null;

    /**
     * @ORM\Column(name="postal_code", type="string", length=10, nullable=true)
     */
    protected ?string $postalCode = null;

    /**
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true)
     */
    protected ?string $countryCode = null;

    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }

    public function setPostOfficeBox(?string $postOfficeBox): void
    {
        $this->postOfficeBox = $postOfficeBox;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): void
    {
        $this->streetAddress = $streetAddress;
    }

    public function getExtendedAddress(): ?string
    {
        return $this->extendedAddress;
    }

    public function setExtendedAddress(?string $extendedAddress): void
    {
        $this->extendedAddress = $extendedAddress;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setLocality(?string $locality): void
    {
        $this->locality = $locality;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }
}
