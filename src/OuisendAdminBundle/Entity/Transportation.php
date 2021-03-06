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
     * @ORM\ManyToOne(targetEntity="Package")
     * @ORM\JoinColumn(name="pkg_id", referencedColumnName="id")
     **/
    private $packages;
    
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
}
