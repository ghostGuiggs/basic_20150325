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
     * Set status
     *
     * @param string $status
     * @return Package
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return Package
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set package_size
     *
     * @param \OuisendAdminBundle\Entity\PackageSize $packageSize
     * @return Package
     */
    public function setPackageSize(\OuisendAdminBundle\Entity\PackageSize $packageSize = null)
    {
        $this->package_size = $packageSize;

        return $this;
    }

    /**
     * Get package_size
     *
     * @return \OuisendAdminBundle\Entity\PackageSize 
     */
    public function getPackageSize()
    {
        return $this->package_size;
    }

    /**
     * Set operation
     *
     * @param \OuisendAdminBundle\Entity\Operation $operation
     * @return Package
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
