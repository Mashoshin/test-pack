<?php

namespace DataLayer\Entity;

/**
 * @Entity
 * @Table(name="track_result")
 */
class TrackResult
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private int $id;

    /**
     * @ManyToOne(targetEntity="Track")
     * @JoinColumn(name="track_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private int $track_id;

    /**
     * @ManyToOne(targetEntity="Car")
     * @JoinColumn(name="car_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private int $car_id;

    /**
     * @Column(type="smallint", name="place")
     */
    private float $place;

    /**
     * @Column(type="decimal", name="points")
     */
    private float $points;
}

