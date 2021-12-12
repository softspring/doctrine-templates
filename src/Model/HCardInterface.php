<?php

namespace Softspring\DoctrineTemplates\Model;

/**
 * Interface HCardInterface
 *
 * @see http://microformats.org/wiki/h-card
 */
interface HCardInterface extends HAddressInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @return string|null
     */
    public function getSurname(): ?string;

    /**
     * @param string|null $surname
     */
    public function setSurname(?string $surname): void;

    /**
     * @return string|null
     */
    public function getTel(): ?string;

    /**
     * @param string|null $tel
     */
    public function setTel(?string $tel): void;
}