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
     * @GeneratedValue
     */
    private int $id;

    /**
     * @ManyToOne(targetEntity="Track")
     * @JoinColumn(name="track_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private int $track_id;

    /**
     * @Column(type="smallint")
     */
    private int $order;
}
