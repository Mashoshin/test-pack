<?php

namespace DataLayer\Entity;

/**
 * @Entity
 * @Table(name="account")
 */
class Account
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private int $id;

    /**
     * @Column(type="string", length=68, nullable=false)
     */
    private string $address;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getAddress(string $address): string
    {
        return $this->address;
    }
}
