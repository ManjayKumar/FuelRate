<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfilecategory
 *
 * @ORM\Table(name="tblfilecategory")
 * @ORM\Entity
 */
class Tblfilecategory
{
    /**
     * @var string
     *
     * @ORM\Column(name="categoryname", type="string", length=50, nullable=false)
     */
    private $categoryname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="deadline", type="string", length=20, nullable=false)
     */
    private $deadline;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
