<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblschoolyear
 *
 * @ORM\Table(name="tblschoolyear")
 * @ORM\Entity
 */
class Tblschoolyear
{
    /**
     * @var string
     *
     * @ORM\Column(name="schoolyear", type="string", length=20, nullable=false)
     */
    private $schoolyear;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
