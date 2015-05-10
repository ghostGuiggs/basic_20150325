<?php

namespace OuisendAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Country
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity(repositoryClass="OuisendAdminBundle\Entity\CountryRepository")
 */
class Country
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
     * @ORM\OneToMany(targetEntity="City", mappedBy="country")
     */
    private $cities;

    public function __construct() {
        $this->cities = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=10)
     */
    private $language;
	
    /**
     * @var string
     *
     * @ORM\Column(name="prefix_phone_number", type="string", length=4)
     */
    private $prefixPhoneNumber;


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
     * Set name
     *
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Country
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set prefixPhoneNumber
     *
     * @param string $prefixPhoneNumber
     * @return Country
     */
    public function setPrefixPhoneNumber($prefixPhoneNumber)
    {
        $this->prefixPhoneNumber = $prefixPhoneNumber;

        return $this;
    }

    /**
     * Get prefixPhoneNumber
     *
     * @return string 
     */
    public function getPrefixPhoneNumber()
    {
        return $this->prefixPhoneNumber;
    }

    /**
     * Add cities
     *
     * @param \OuisendAdminBundle\Entity\City $cities
     * @return Country
     */
    public function addCity(\OuisendAdminBundle\Entity\City $cities)
    {
        $this->cities[] = $cities;

        return $this;
    }

    /**
     * Remove cities
     *
     * @param \OuisendAdminBundle\Entity\City $cities
     */
    public function removeCity(\OuisendAdminBundle\Entity\City $cities)
    {
        $this->cities->removeElement($cities);
    }

    /**
     * Get cities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCities()
    {
        return $this->cities;
    }
}
