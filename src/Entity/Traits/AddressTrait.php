<?php

namespace Softspring\DoctrineTemplates\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait AddressTrait
 */
trait AddressTrait
{
    /**
     * @var string|null
     * @ORM\Column(name="post_office_box", type="string", length=100, nullable=true)
     */
    protected $postOfficeBox;

    /**
     * @var string|null
     * @ORM\Column(name="street_address", type="string", length=100, nullable=true)
     */
    protected $streetAddress;

    /**
     * @var string|null
     * @ORM\Column(name="extended_address", type="string", length=100, nullable=true)
     */
    protected $extendedAddress;

    /**
     * @var string|null
     * @ORM\Column(name="locality", type="string", length=100, nullable=true)
     */
    protected $locality;

    /**
     * @var string|null
     * @ORM\Column(name="region", type="string", length=100, nullable=true)
     */
    protected $region;

    /**
     * @var string|null
     * @ORM\Column(name="postal_code", type="string", length=10, nullable=true)
     */
    protected $postalCode;

    /**
     * @var string|null
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true)
     */
    protected $countryCode;

    /**
     * @return string|null
     */
    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }

    /**
     * @param string|null $postOfficeBox
     */
    public function setPostOfficeBox(?string $postOfficeBox): void
    {
        $this->postOfficeBox = $postOfficeBox;
    }

    /**
     * @return string|null
     */
    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    /**
     * @param string|null $streetAddress
     */
    public function setStreetAddress(?string $streetAddress): void
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * @return string|null
     */
    public function getExtendedAddress(): ?string
    {
        return $this->extendedAddress;
    }

    /**
     * @param string|null $extendedAddress
     */
    public function setExtendedAddress(?string $extendedAddress): void
    {
        $this->extendedAddress = $extendedAddress;
    }

    /**
     * @return string|null
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }

    /**
     * @param string|null $locality
     */
    public function setLocality(?string $locality): void
    {
        $this->locality = $locality;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $countryCode
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }
}