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
     * @GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @ManyToOne(targetEntity="Car",cascade={"persist", "remove"})
     * @JoinColumn(name="car_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private Car $car;

    /**
     * @ManyToOne(targetEntity="Section", cascade={"persist", "remove"})
     * @JoinColumn(name="section_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private Section $section;

    /**
     * @Column(type="decimal", name="end_speed")
     */
    private float $endSpeed;

    /**
     * @Column(type="decimal", name="points")
     */
    private float $points;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCar(): Car
    {
        return $this->car;
    }

    public function setCarId(Car $car): void
    {
        $this->car = $car;
    }

    public function getEndSpeed(): float
    {
        return $this->endSpeed;
    }

    public function setEndSpeed(float $endSpeed): void
    {
        $this->endSpeed = $endSpeed;
    }

    public function getSection(): Section
    {
        return $this->section;
    }

    public function setSection(Section $section): void
    {
        $this->section = $section;
    }

    public function getPoints(): float
    {
        return $this->points;
    }

    public function setPoints(float $points): void
    {
        $this->points = $points;
    }
}
