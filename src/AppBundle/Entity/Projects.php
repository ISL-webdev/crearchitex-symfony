<?php namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Projects
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="projets")
 */
class Projects {
    /**
    *@ORM\Id
    *@ORM\GeneratedValue(strategy="AUTO")
    *@ORM\Column(type="integer")
    */
    private $id;

    /**
     * Les relations dans doctrine se fonct entre objets, pas à l'aide d'ids
     * @ORM\ManyToOne(targetEntity="ProjectsCategories", inversedBy="projects")
     * @var ProjectsCategories
     */
    private $categorie;

    /**
     * @ORM\Column(type="string")
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private  $date_projet;

    /**
     * @ORM\Column(type="string")
     */
    private $photo;

    /**
     * @ORM\Column(type="integer")
     */
    private $is_visible = 1;

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
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
    public function getDateProjet()
    {
        return $this->date_projet;
    }

    /**
     * @param mixed $date_projet
     */
    public function setDateProjet($date_projet)
    {
        $this->date_projet = $date_projet;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
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


}
