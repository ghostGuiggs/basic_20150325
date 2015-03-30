<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackageSize
 *
 * @ORM\Table(name="package_sizes")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\PackageSizeRepository")
 */
class PackageSize
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var decimal
     *
     * @ORM\Column(name="ref_amount", type="decimal")
     */
    private $refAmount;    
}
