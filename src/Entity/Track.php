<?php

namespace DataLayer\Entity;

/**
 * @Entity
 * @Table(name="track")
 */
class Track
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @Column(type="string", length=30)
     */
    private string $state;

    /**
     * @Column(type="string", length=68, nullable=false)
     */
    private string $address;

    public function getId(): int
    {
        return $this->id;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }
}
