<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblteacherfile
 *
 * @ORM\Table(name="tblteacherfile")
 * @ORM\Entity
 */
class Tblteacherfile
{
    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="text", length=65535, nullable=false)
     */
    private $filename;

    /**
     * @var integer
     *
     * @ORM\Column(name="facultyid", type="integer", nullable=false)
     */
    private $facultyid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateuploaded", type="date", nullable=false)
     */
    private $dateuploaded;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
