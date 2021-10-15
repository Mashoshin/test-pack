<?php

namespace DataLayer\Entity;

/**
 * @Entity
 * @Table(name="section")
 */
class Section
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
     * @Column(type="smallint")
     */
    private int $order;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTrack(): Track
    {
        return $this->track;
    }

    public function setTrack(Track $track): void
    {
        $this->track = $track;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): void
    {
        $this->order = $order;
    }
}
