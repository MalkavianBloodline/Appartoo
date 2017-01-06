<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
    /**
     * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	*/
    protected $id;
    /**
	 * @ORM\Column(type="integer", nullable=true)
	*/
    private $age;
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	*/
    private $famille;
    /**
	 * @ORM\Column(type="string", length=255, nullable=true)
	*/
    private $race;
    /**
	 * @ORM\Column(type="string", length=255, nullable=true)
	*/
    private $nourriture;

    public function __construct()
    {
    	parent::__construct();
		        // your own logic
    }


    public function getId() {
    	return $this->id;
    }

    public function getAge() {
    	return $this->age;
    }

    public function setAge($setAge) {
    	$this->age = $setAge;
    }

    public function getfamille() {
    	return $this->famille;
    }

    public function setFamille($setFamille) {
    	$this->famille = $setFamille;
    }

    public function getrace() {
    	return $this->race;
    }

    public function setRace($setRace) {
    	$this->race = $setRace;
    }

    public function getnourriture() {
    	return $this->nourriture;
    }

    public function setNourriture($setNourriture) {
    	$this->nourriture = $setNourriture;
    }
}