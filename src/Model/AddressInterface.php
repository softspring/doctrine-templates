<?php

namespace Softspring\Component\DoctrineTemplates\Model;

/**
 * Interface AddressInterface.
 *
 * @see http://microformats.org/wiki/adr
 */
interface AddressInterface
{
    public function getPostOfficeBox(): ?string;

    public function setPostOfficeBox(?string $postOfficeBox): void;

    public function getStreetAddress(): ?string;

    public function setStreetAddress(?string $streetAddress): void;

    public function getExtendedAddress(): ?string;

    public function setExtendedAddress(?string $extendedAddress): void;

    public function getLocality(): ?string;

    public function setLocality(?string $locality): void;

    public function getRegion(): ?string;

    public function setRegion(?string $region): void;

    public function getPostalCode(): ?string;

    public function setPostalCode(?string $postalCode): void;

    public function getCountryCode(): ?string;

    public function setCountryCode(?string $countryCode): void;
}
