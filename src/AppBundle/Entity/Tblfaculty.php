<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfaculty
 *
 * @ORM\Entity
 */
class Tblfaculty
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
     * @ORM\Column(name="lname", type="string", length=20, nullable=false)
     */
    private $lname;

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=20, nullable=false)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="mname", type="string", length=20, nullable=false)
     */
    private $mname;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact", type="integer", nullable=false)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set facultyid
     *
     * @param integer $facultyid
     * @return Tblfaculty
     */
    public function setFacultyid($facultyid)
    {
        $this->facultyid = $facultyid;

        return $this;
    }

    /**
     * Get facultyid
     *
     * @return integer 
     */
    public function getFacultyid()
    {
        return $this->facultyid;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return Tblfaculty
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set fname
     *
     * @param string $fname
     * @return Tblfaculty
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set mname
     *
     * @param string $mname
     * @return Tblfaculty
     */
    public function setMname($mname)
    {
        $this->mname = $mname;

        return $this;
    }

    /**
     * Get mname
     *
     * @return string 
     */
    public function getMname()
    {
        return $this->mname;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Tblfaculty
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contact
     *
     * @param integer $contact
     * @return Tblfaculty
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return integer 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Tblfaculty
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Tblfaculty
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
