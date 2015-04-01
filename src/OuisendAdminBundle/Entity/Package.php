<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Package
 *
 * @ORM\Table(name="packages")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\PackageRepository")
 */
class Package
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
     * @ORM\Column(name="status", type="text")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="PackageSize")
     * @ORM\JoinColumn(name="pkg_size_id", referencedColumnName="id")
     **/
    private $package_size;

    /**
     * @ORM\ManyToOne(targetEntity="Operation")
     * @ORM\JoinColumn(name="operation_id", referencedColumnName="id")
     **/
    private $operation;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float")
     */
    private $weight;
	
}
