<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbldownloadable
 *
 * @ORM\Table(name="tbldownloadable")
 * @ORM\Entity
 */
class Tbldownloadable
{
    /**
     * @var string
     *
     * @ORM\Column(name="downloadablefile", type="text", length=65535, nullable=false)
     */
    private $downloadablefile;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
