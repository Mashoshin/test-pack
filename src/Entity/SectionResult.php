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
     * @Column(type="integer", name="start_speed")
     */
    private int $startSpeed;

    /**
     * @Column(type="integer", name="end_speed")
     */
    private int $endSpeed;

    /**
     * @Column(type="integer", name="start_points")
     */
    private int $startPoints;

    /**
     * @Column(type="integer", name="end_points")
     */
    private int $endPoints;

    /**
     * @Column(type="boolean", name="is_control_lost")
     */
    private bool $isControlLost;

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

    public function getStartSpeed(): int
    {
        return $this->startSpeed;
    }

    public function setStartSpeed(int $startSpeed): void
    {
        $this->startSpeed = $startSpeed;
    }

    public function getEndSpeed(): int
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

    public function getStartPoints(): float
    {
        return $this->startPoints;
    }

    public function setStartPoints(int $points): void
    {
        $this->startPoints = $points;
    }

    public function getEndPoints(): int
    {
        return $this->endPoints;
    }

    public function setEndPoints(int $endPoints): void
    {
        $this->endPoints = $endPoints;
    }

    public function isControlLost(): bool
    {
        return $this->isControlLost;
    }
}
