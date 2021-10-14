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
     * @GeneratedValue
     */
    private int $id;

    /**
     * @Column(type="string", length=68, nullable=false)
     */
    private string $address;

    /**
     * @ManyToOne(targetEntity="Account")
     * @JoinColumn(name="owner_id", referencedColumnName="id", onDelete="CASCADE")
     */
    public $owner_id;

    public function getAll(): array
    {
        return [
            $this->id,
            $this->address,
            $this->owner_id
        ];
    }
}
