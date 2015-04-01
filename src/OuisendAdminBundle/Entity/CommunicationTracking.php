<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunicationTracking
 *
 * @ORM\Table(name="communications")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\CommunicationTrackingRepository")
 */
class CommunicationTracking
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
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     **/
    private $from;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="receiver_id", referencedColumnName="id")
     **/
    private $to;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text")
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var text
     *
     * @ORM\Column(name="content_html", type="text")
     */
    private $content_html;

    /**
     * @var text
     *
     * @ORM\Column(name="content_text", type="text")
     */
    private $content_text;	
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creation_date;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="send_date", type="datetime")
     */
    private $sendDate;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $updateDate;	
        
}
