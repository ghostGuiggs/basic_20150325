<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transportation
 *
 * @ORM\Table(name="transportations")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\TransportationRepository")
 */
class Transportation
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
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /*
     * @ORM\ManyToOne(targetEntity="Operation", inversedBy="operations")
     * @ORM\JoinColumn(name="operation_id", referencedColumnName="id")
     */
    private $operation;

    /**
     * @ORM\ManyToOne(targetEntity="TransportationType")
     * @ORM\JoinColumn(name="transportation_type_id", referencedColumnName="id")
     **/
    private $transportation_type;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="departure_city_id", referencedColumnName="id")
     **/
    private $departureCity;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="arrival_city_id", referencedColumnName="id")
     **/
    private $arrivalCity;

    /**
     * @ORM\ManyToOne(targetEntity="PackageSize")
     * @ORM\JoinColumn(name="pkg_size_id", referencedColumnName="id")
     **/
    private $packageSize;
    
    /**
     * @var time
     *
     * @ORM\Column(name="time_to_meet_receiver", type="time")
     */
    private $ttm_receiver;
    
    /**
     * @var time
     *
     * @ORM\Column(name="time_to_meet_sender", type="time")
     */
    private $ttm_sender;    
    
    /**
     * @var string
     *
     * @ORM\Column(name="place_to_meet_receiver", type="text")
     */
    private $ptm_receiver;
    
    /**
     * @var string
     *
     * @ORM\Column(name="place_to_meet_sender", type="text")
     */
    private $ptm_sender;    

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
     * Set title
     *
     * @param string $title
     * @return Transportation
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Transportation
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set ttm_receiver
     *
     * @param \DateTime $ttmReceiver
     * @return Transportation
     */
    public function setTtmReceiver($ttmReceiver)
    {
        $this->ttm_receiver = $ttmReceiver;

        return $this;
    }

    /**
     * Get ttm_receiver
     *
     * @return \DateTime 
     */
    public function getTtmReceiver()
    {
        return $this->ttm_receiver;
    }

    /**
     * Set ttm_sender
     *
     * @param \DateTime $ttmSender
     * @return Transportation
     */
    public function setTtmSender($ttmSender)
    {
        $this->ttm_sender = $ttmSender;

        return $this;
    }

    /**
     * Get ttm_sender
     *
     * @return \DateTime 
     */
    public function getTtmSender()
    {
        return $this->ttm_sender;
    }

    /**
     * Set ptm_receiver
     *
     * @param string $ptmReceiver
     * @return Transportation
     */
    public function setPtmReceiver($ptmReceiver)
    {
        $this->ptm_receiver = $ptmReceiver;

        return $this;
    }

    /**
     * Get ptm_receiver
     *
     * @return string 
     */
    public function getPtmReceiver()
    {
        return $this->ptm_receiver;
    }

    /**
     * Set ptm_sender
     *
     * @param string $ptmSender
     * @return Transportation
     */
    public function setPtmSender($ptmSender)
    {
        $this->ptm_sender = $ptmSender;

        return $this;
    }

    /**
     * Get ptm_sender
     *
     * @return string 
     */
    public function getPtmSender()
    {
        return $this->ptm_sender;
    }

    /**
     * Set transportation_type
     *
     * @param \OuisendAdminBundle\Entity\TransportationType $transportationType
     * @return Transportation
     */
    public function setTransportationType(\OuisendAdminBundle\Entity\TransportationType $transportationType = null)
    {
        $this->transportation_type = $transportationType;

        return $this;
    }

    /**
     * Get transportation_type
     *
     * @return \OuisendAdminBundle\Entity\TransportationType 
     */
    public function getTransportationType()
    {
        return $this->transportation_type;
    }

    /**
     * Set departureCity
     *
     * @param \OuisendAdminBundle\Entity\City $departureCity
     * @return Transportation
     */
    public function setDepartureCity(\OuisendAdminBundle\Entity\City $departureCity = null)
    {
        $this->departureCity = $departureCity;

        return $this;
    }

    /**
     * Get departureCity
     *
     * @return \OuisendAdminBundle\Entity\City 
     */
    public function getDepartureCity()
    {
        return $this->departureCity;
    }

    /**
     * Set arrivalCity
     *
     * @param \OuisendAdminBundle\Entity\City $arrivalCity
     * @return Transportation
     */
    public function setArrivalCity(\OuisendAdminBundle\Entity\City $arrivalCity = null)
    {
        $this->arrivalCity = $arrivalCity;

        return $this;
    }

    /**
     * Get arrivalCity
     *
     * @return \OuisendAdminBundle\Entity\City 
     */
    public function getArrivalCity()
    {
        return $this->arrivalCity;
    }

    /**
     * Set packageSize
     *
     * @param \OuisendAdminBundle\Entity\PackageSize $packageSize
     * @return Transportation
     */
    public function setPackageSize(\OuisendAdminBundle\Entity\PackageSize $packageSize = null)
    {
        $this->packageSize = $packageSize;

        return $this;
    }

    /**
     * Get packageSize
     *
     * @return \OuisendAdminBundle\Entity\PackageSize 
     */
    public function getPackageSize()
    {
        return $this->packageSize;
    }
}
