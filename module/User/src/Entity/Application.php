<?php


namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a registered application.
 * @ORM\Entity()
 * @ORM\Table(name="application")
 */
class Application
{


    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name")
     */
    protected $name;

    /**
     * @ORM\Column(name="description")
     */
    protected $description;

    /**
     * @ORM\Column(name="date_created")
     */
    protected $dateCreated;

    /**
     * @ORM\ManyToMany(targetEntity="User\Entity\User", mappedBy="applications")
     */
    protected $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }




    public function getUsers()
    {
        return $this->users;
    }

    public function addUser(User $user)
    {
        $this->users->add($user);
    }

}



