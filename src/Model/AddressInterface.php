<?php

namespace Softspring\DoctrineTemplates\Model;

/**
 * Interface AddressInterface
 *
 * @see http://microformats.org/wiki/adr
 */
interface AddressInterface
{
    /**
     * @return string|null
     */
    public function getPostOfficeBox(): ?string;

    /**
     * @param string|null $postOfficeBox
     */
    public function setPostOfficeBox(?string $postOfficeBox): void;

    /**
     * @return string|null
     */
    public function getStreetAddress(): ?string;

    /**
     * @param string|null $streetAddress
     */
    public function setStreetAddress(?string $streetAddress): void;

    /**
     * @return string|null
     */
    public function getExtendedAddress(): ?string;

    /**
     * @param string|null $extendedAddress
     */
    public function setExtendedAddress(?string $extendedAddress): void;

    /**
     * @return string|null
     */
    public function getLocality(): ?string;

    /**
     * @param string|null $locality
     */
    public function setLocality(?string $locality): void;

    /**
     * @return string|null
     */
    public function getRegion(): ?string;

    /**
     * @param string|null $region
     */
    public function setRegion(?string $region): void;

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string;

    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode): void;

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string;

    /**
     * @param string|null $countryCode
     */
    public function setCountryCode(?string $countryCode): void;
}