<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="accounts")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\AccountRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Account {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="balance", type="int")
     */
    private $balance;

    /**
     * @ORM\OneToOne(targetEntity="OuisendAdminBundle\Entity\User", cascade={"persist"})
     */
    private $user;

    /**
     * @var datetime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var datetime
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $updateDate;

    /**
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="account")
     */
    private $operations;
        
    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="account")
     */
    private $addresses;
    
    
    /**
    * @ORM\PreUpdate
    */
    public function updateDate() {
        $this->setUpdateDate(new \Datetime());
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->operations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set balance
     *
     * @param \int $balance
     * @return Account
     */
    public function setBalance(\int $balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return \int 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Account
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
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return Account
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
     * Set user
     *
     * @param \OuisendAdminBundle\Entity\User $user
     * @return Account
     */
    public function setUser(\OuisendAdminBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \OuisendAdminBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add operations
     *
     * @param \OuisendAdminBundle\Entity\Operation $operations
     * @return Account
     */
    public function addOperation(\OuisendAdminBundle\Entity\Operation $operations)
    {
        $this->operations[] = $operations;

        return $this;
    }

    /**
     * Remove operations
     *
     * @param \OuisendAdminBundle\Entity\Operation $operations
     */
    public function removeOperation(\OuisendAdminBundle\Entity\Operation $operations)
    {
        $this->operations->removeElement($operations);
    }

    /**
     * Get operations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Add addresses
     *
     * @param \OuisendAdminBundle\Entity\Address $addresses
     * @return Account
     */
    public function addAddress(\OuisendAdminBundle\Entity\Address $addresses)
    {
        $this->addresses[] = $addresses;

        return $this;
    }

    /**
     * Remove addresses
     *
     * @param \OuisendAdminBundle\Entity\Address $addresses
     */
    public function removeAddress(\OuisendAdminBundle\Entity\Address $addresses)
    {
        $this->addresses->removeElement($addresses);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
}
