<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsemester
 *
 * @ORM\Table(name="tblsemester")
 * @ORM\Entity
 */
class Tblsemester
{
    /**
     * @var string
     *
     * @ORM\Column(name="semester", type="string", length=20, nullable=false)
     */
    private $semester;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
