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
    
}
