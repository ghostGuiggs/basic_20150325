<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Complaint
 *
 * @ORM\Table(name="complaints")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\ComplaintRepository")
 */
class Complaint
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
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     **/
    private $account;

    /**
     * @ORM\ManyToOne(targetEntity="Operation")
     * @ORM\JoinColumn(name="operation_id", referencedColumnName="id")
     **/
    private $operation;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="action_taken", type="text")
     */
    private $actionTaken;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="handling_date", type="datetime")
     */
    private $handlingDate;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $update_date;

}
