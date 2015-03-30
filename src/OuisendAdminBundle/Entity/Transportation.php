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

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="travels")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="departure_city_id", referencedColumnName="id")
     **/
    private $departure_city;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="arrival_city_id", referencedColumnName="id")
     **/
    private $arrival_city;

    /**
     * @ORM\ManyToOne(targetEntity="TransportationType")
     * @ORM\JoinColumn(name="transportation_type_id", referencedColumnName="id")
     **/
    private $transportation_type;

    /**
     * @ORM\ManyToOne(targetEntity="PackageSize")
     * @ORM\JoinColumn(name="package_size_id", referencedColumnName="id")
     **/
    private $package_size;
    
    /**
     * @var time
     *
     * @ORM\Column(name="time_to_meet_receiver", type="time")
     */
    private $ttm_receiver;
    
    /**
     * @var time
     *
     * @ORM\Column(name="time_to_meet_receiver", type="time")
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
     * @ORM\Column(name="place_to_meet_receiver", type="text")
     */
    private $ptm_sender;    
}
