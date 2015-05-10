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
     * @ORM\JoinColumn(name="by", referencedColumnName="id")
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
     * Set action
     *
     * @param string $action
     * @return History
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return History
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
     * Set actionDate
     *
     * @param \DateTime $actionDate
     * @return History
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;

        return $this;
    }

    /**
     * Get actionDate
     *
     * @return \DateTime 
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * Set by
     *
     * @param \OuisendAdminBundle\Entity\User $by
     * @return History
     */
    public function setBy(\OuisendAdminBundle\Entity\User $by = null)
    {
        $this->by = $by;

        return $this;
    }

    /**
     * Get by
     *
     * @return \OuisendAdminBundle\Entity\User 
     */
    public function getBy()
    {
        return $this->by;
    }
}
