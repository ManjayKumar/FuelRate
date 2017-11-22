<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblactivities
 *
 * @ORM\Table(name="tblactivities")
 * @ORM\Entity
 */
class Tblactivities
{
    /**
     * @var string
     *
     * @ORM\Column(name="activityname", type="text", length=65535, nullable=false)
     */
    private $activityname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="activity_date", type="date", nullable=false)
     */
    private $activityDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
