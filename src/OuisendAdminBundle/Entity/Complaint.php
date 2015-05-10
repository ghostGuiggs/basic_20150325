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
     * Set type
     *
     * @param string $type
     * @return Complaint
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Complaint
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Complaint
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set actionTaken
     *
     * @param string $actionTaken
     * @return Complaint
     */
    public function setActionTaken($actionTaken)
    {
        $this->actionTaken = $actionTaken;

        return $this;
    }

    /**
     * Get actionTaken
     *
     * @return string 
     */
    public function getActionTaken()
    {
        return $this->actionTaken;
    }

    /**
     * Set handlingDate
     *
     * @param \DateTime $handlingDate
     * @return Complaint
     */
    public function setHandlingDate($handlingDate)
    {
        $this->handlingDate = $handlingDate;

        return $this;
    }

    /**
     * Get handlingDate
     *
     * @return \DateTime 
     */
    public function getHandlingDate()
    {
        return $this->handlingDate;
    }

    /**
     * Set update_date
     *
     * @param \DateTime $updateDate
     * @return Complaint
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;

        return $this;
    }

    /**
     * Get update_date
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Set account
     *
     * @param \OuisendAdminBundle\Entity\Account $account
     * @return Complaint
     */
    public function setAccount(\OuisendAdminBundle\Entity\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \OuisendAdminBundle\Entity\Account 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set operation
     *
     * @param \OuisendAdminBundle\Entity\Operation $operation
     * @return Complaint
     */
    public function setOperation(\OuisendAdminBundle\Entity\Operation $operation = null)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return \OuisendAdminBundle\Entity\Operation 
     */
    public function getOperation()
    {
        return $this->operation;
    }
}
