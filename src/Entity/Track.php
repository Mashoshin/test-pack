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
     * @GeneratedValue
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
}
