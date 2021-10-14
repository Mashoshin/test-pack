<?php

namespace DataLayer\Entity;

/**
 * @Entity
 * @Table(name="section_result")
 */
class SectionResult
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private int $id;

    /**
     * @ManyToOne(targetEntity="Car")
     * @JoinColumn(name="car_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private int $car_id;

    /**
     * @ManyToOne(targetEntity="Section")
     * @JoinColumn(name="section_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private int $section_id;

    /**
     * @Column(type="decimal", name="end_speed")
     */
    private float $endSpeed;

    /**
     * @Column(type="decimal", name="points")
     */
    private float $points;
}
