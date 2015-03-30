<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="historic")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\HistoryRepository")
 */
class History
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
     * @ORM\Column(name="action", type="string")
     */
    private $action;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="action_by", referencedColumnName="id")
     **/
    private $by;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string")
     */
    private $content;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="action_date", type="datetime")
     */
    private $actionDate;
	
}
