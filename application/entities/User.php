<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer")
     * @ORM\var string
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @ORM\var string
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Bug", mappedBy="reporter")
     * @ORM\var Bug[]
     */
    protected $reportedBugs = null;

    /**
     * @ORM\OneToMany(targetEntity="Bug", mappedBy="engineer")
     * @ORM\var Bug[]
     */
    protected $assignedBugs = null;

    public function __construct()
    {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function addReportedBug($bug)
    {
        $this->reportedBugs[] = $bug;
    }

    public function assignedToBug($bug)
    {
        $this->assignedBugs[] = $bug;
    }
}
