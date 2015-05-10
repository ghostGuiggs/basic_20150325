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
     * Set subject
     *
     * @param string $subject
     * @return CommunicationTracking
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
     * Set content
     *
     * @param string $content
     * @return CommunicationTracking
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content_html
     *
     * @param string $contentHtml
     * @return CommunicationTracking
     */
    public function setContentHtml($contentHtml)
    {
        $this->content_html = $contentHtml;

        return $this;
    }

    /**
     * Get content_html
     *
     * @return string 
     */
    public function getContentHtml()
    {
        return $this->content_html;
    }

    /**
     * Set content_text
     *
     * @param string $contentText
     * @return CommunicationTracking
     */
    public function setContentText($contentText)
    {
        $this->content_text = $contentText;

        return $this;
    }

    /**
     * Get content_text
     *
     * @return string 
     */
    public function getContentText()
    {
        return $this->content_text;
    }

    /**
     * Set creation_date
     *
     * @param \DateTime $creationDate
     * @return CommunicationTracking
     */
    public function setCreationDate($creationDate)
    {
        $this->creation_date = $creationDate;

        return $this;
    }

    /**
     * Get creation_date
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set sendDate
     *
     * @param \DateTime $sendDate
     * @return CommunicationTracking
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return \DateTime 
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return CommunicationTracking
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set from
     *
     * @param \OuisendAdminBundle\Entity\User $from
     * @return CommunicationTracking
     */
    public function setFrom(\OuisendAdminBundle\Entity\User $from = null)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return \OuisendAdminBundle\Entity\User 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param \OuisendAdminBundle\Entity\User $to
     * @return CommunicationTracking
     */
    public function setTo(\OuisendAdminBundle\Entity\User $to = null)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return \OuisendAdminBundle\Entity\User 
     */
    public function getTo()
    {
        return $this->to;
    }
}
