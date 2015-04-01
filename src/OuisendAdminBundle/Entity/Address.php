<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="addresses")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\AddressRepository")
 */
class Address
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
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="street1", type="string", length=255)
     */
    private $street1;

    /**
     * @var string
     *
     * @ORM\Column(name="street2", type="string", length=255)
     */
    private $street2;

    /**
     * @var string
     *
     * @ORM\Column(name="complement_address", type="string", length=255)
     */
    private $complementAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=255)
     */
    private $phoneNumber;
}
