<?php

namespace Softspring\DoctrineTemplates\Model;

/**
 * Interface HCardInterface.
 *
 * @see http://microformats.org/wiki/h-card
 */
interface HCardInterface extends HAddressInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;

    public function getSurname(): ?string;

    public function setSurname(?string $surname): void;

    public function getTel(): ?string;

    public function setTel(?string $tel): void;
}
