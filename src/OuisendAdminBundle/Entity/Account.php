<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="accounts")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\AccountRepository")
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
     * @ORM\Column(name="account_balance", type="int")
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
    private $creation_date;

    /**
     * @var datetime
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $update_date;

}
