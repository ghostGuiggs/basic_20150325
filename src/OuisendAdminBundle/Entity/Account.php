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
     * @var text
     *
     * @ORM\Column(name="status", type="text")
     */
    private $status;
    
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
}
