<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ProjectsCategories
 * @package AppBundle\Entity
 * @ORM\Entity()
 * @ORM\Table(name="projet_categories")
 */
class ProjectsCategories
{

    public function __construct(){
        // les catégories concernent plusieurs projets
        $this->projects = new ArrayCollection();
    }
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Projects", mappedBy="categorie")
     * // il ne faut pas utiliser @ORM\Column lorsque l'on utilise des annotations
     * @var ArrayCollection
     */
    private $projects;

    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    /**
     * @ORM\Column(type="boolean")
     */
    private $is_visible = true;

    /**
     * @return mixed
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * @param mixed $projects
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
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
    public function getIsVisible()
    {
        return $this->is_visible;
    }

    /**
     * @param mixed $is_visible
     */
    public function setIsVisible($is_visible)
    {
        $this->is_visible = $is_visible;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName( $name ) {
        $this->name = $name;
    }
}
