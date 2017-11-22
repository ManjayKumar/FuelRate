<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblnotification
 *
 * @ORM\Table(name="tblnotification")
 * @ORM\Entity
 */
class Tblnotification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="facultyid", type="integer", nullable=false)
     */
    private $facultyid;

    /**
     * @var string
     *
     * @ORM\Column(name="notification", type="text", length=65535, nullable=false)
     */
    private $notification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetimenotif", type="datetime", nullable=false)
     */
    private $datetimenotif;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
