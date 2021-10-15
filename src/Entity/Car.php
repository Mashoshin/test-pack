<?php

namespace DataLayer\Entity;

/**
 * @Entity
 * @Table(name="car")
 */
class Car
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @Column(type="string", length=68, nullable=false)
     */
    private string $address;

    /**
     * @ManyToOne(targetEntity="Account", cascade={"persist", "remove"})
     * @JoinColumn(name="owner_id", referencedColumnName="id", onDelete="CASCADE")
     */
    public Account $owner;

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

    public function getOwner(): Account
    {
        return $this->owner;
    }

    public function setOwner(Account $owner): void
    {
        $this->owner = $owner;
    }
}
