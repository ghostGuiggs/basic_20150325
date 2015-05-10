<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operation
 *
 * @ORM\Table(name="operations")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\OperationRepository")
 */
class Operation
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumn(name="traveler_id", referencedColumnName="id")
     **/
    private $traveler;

    /**
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     **/
    private $sender;

    /**
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumn(name="receiver_id", referencedColumnName="id")
     **/
    private $receiver;

    /**
     * @var decimal
     *
     * @ORM\Column(name="amount", type="decimal")
     */
    private $amount;

    /**
     * @ORM\OneToMany(targetEntity="Package", mappedBy="operation")
     */
    private $packages;

    /**
     * @ORM\OneToMany(targetEntity="Transportation", mappedBy="operation")
     */
    private $transportations;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->packages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->transportations = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set status
     *
     * @param string $status
     * @return Operation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Operation
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set traveler
     *
     * @param \OuisendAdminBundle\Entity\Account $traveler
     * @return Operation
     */
    public function setTraveler(\OuisendAdminBundle\Entity\Account $traveler = null)
    {
        $this->traveler = $traveler;

        return $this;
    }

    /**
     * Get traveler
     *
     * @return \OuisendAdminBundle\Entity\Account 
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Set sender
     *
     * @param \OuisendAdminBundle\Entity\Account $sender
     * @return Operation
     */
    public function setSender(\OuisendAdminBundle\Entity\Account $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \OuisendAdminBundle\Entity\Account 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param \OuisendAdminBundle\Entity\Account $receiver
     * @return Operation
     */
    public function setReceiver(\OuisendAdminBundle\Entity\Account $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \OuisendAdminBundle\Entity\Account 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Add packages
     *
     * @param \OuisendAdminBundle\Entity\Package $packages
     * @return Operation
     */
    public function addPackage(\OuisendAdminBundle\Entity\Package $packages)
    {
        $this->packages[] = $packages;

        return $this;
    }

    /**
     * Remove packages
     *
     * @param \OuisendAdminBundle\Entity\Package $packages
     */
    public function removePackage(\OuisendAdminBundle\Entity\Package $packages)
    {
        $this->packages->removeElement($packages);
    }

    /**
     * Get packages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * Add transportations
     *
     * @param \OuisendAdminBundle\Entity\Transportation $transportations
     * @return Operation
     */
    public function addTransportation(\OuisendAdminBundle\Entity\Transportation $transportations)
    {
        $this->transportations[] = $transportations;

        return $this;
    }

    /**
     * Remove transportations
     *
     * @param \OuisendAdminBundle\Entity\Transportation $transportations
     */
    public function removeTransportation(\OuisendAdminBundle\Entity\Transportation $transportations)
    {
        $this->transportations->removeElement($transportations);
    }

    /**
     * Get transportations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTransportations()
    {
        return $this->transportations;
    }
}
