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
     * @GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @ManyToOne(targetEntity="Track", cascade={"persist", "remove"})
     * @JoinColumn(name="track_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private Track $track;

    /**
     * @ManyToOne(targetEntity="Car", cascade={"persist", "remove"})
     * @JoinColumn(name="car_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private Car $car;

    /**
     * @Column(type="smallint", name="place")
     */
    private int $place;

    /**
     * @Column(type="decimal", name="points")
     */
    private float $points;

	public function getId(): int
	{
		return $this->id;
	}

	public function getCar() :Car
	{
		return $this->car;
	}

	public function setCar(Car $car): void
	{
		$this->car = $car;
	}

	public function getTrack(): Track
	{
		return $this->track;
	}

	public function setTrack(Track $track): void
	{
		$this->track = $track;
	}

	public function getPoints(): float
	{
		return $this->points;
	}

	public function setPoints(float $points): void
	{
		$this->points = $points;
	}

	public function getPlace(): int
	{
		return $this->place;
	}

	public function setPlace(int $place): void
	{
		$this->place = $place;
	}
}

