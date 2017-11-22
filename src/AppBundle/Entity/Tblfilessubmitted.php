<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfilessubmitted
 *
 * @ORM\Table(name="tblfilessubmitted")
 * @ORM\Entity
 */
class Tblfilessubmitted
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
     * @ORM\Column(name="categoryid", type="integer", nullable=false)
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="facultyid", type="integer", nullable=false)
     */
    private $facultyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="semesterid", type="integer", nullable=false)
     */
    private $semesterid;

    /**
     * @var integer
     *
     * @ORM\Column(name="schoolyearid", type="integer", nullable=false)
     */
    private $schoolyearid;

    /**
     * @var string
     *
     * @ORM\Column(name="uploadedfiles", type="text", length=65535, nullable=false)
     */
    private $uploadedfiles;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateuploaded", type="date", nullable=false)
     */
    private $dateuploaded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateupdated", type="date", nullable=false)
     */
    private $dateupdated;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="text", length=65535, nullable=false)
     */
    private $remarks;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
