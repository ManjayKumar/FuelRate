<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsent
 *
 * @ORM\Table(name="tblsent")
 * @ORM\Entity
 */
class Tblsent
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="message_date", type="datetime", nullable=false)
     */
    private $messageDate;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", length=65535, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="sendto", type="integer", nullable=false)
     */
    private $sendto;

    /**
     * @var integer
     *
     * @ORM\Column(name="senderid", type="integer", nullable=false)
     */
    private $senderid;

    /**
     * @var string
     *
     * @ORM\Column(name="sender_name", type="string", length=20, nullable=false)
     */
    private $senderName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set messageDate
     *
     * @param \DateTime $messageDate
     * @return Tblsent
     */
    public function setMessageDate($messageDate)
    {
        $this->messageDate = $messageDate;

        return $this;
    }

    /**
     * Get messageDate
     *
     * @return \DateTime 
     */
    public function getMessageDate()
    {
        return $this->messageDate;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Tblsent
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Tblsent
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set sendto
     *
     * @param integer $sendto
     * @return Tblsent
     */
    public function setSendto($sendto)
    {
        $this->sendto = $sendto;

        return $this;
    }

    /**
     * Get sendto
     *
     * @return integer 
     */
    public function getSendto()
    {
        return $this->sendto;
    }

    /**
     * Set senderid
     *
     * @param integer $senderid
     * @return Tblsent
     */
    public function setSenderid($senderid)
    {
        $this->senderid = $senderid;

        return $this;
    }

    /**
     * Get senderid
     *
     * @return integer 
     */
    public function getSenderid()
    {
        return $this->senderid;
    }

    /**
     * Set senderName
     *
     * @param string $senderName
     * @return Tblsent
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * Get senderName
     *
     * @return string 
     */
    public function getSenderName()
    {
        return $this->senderName;
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
