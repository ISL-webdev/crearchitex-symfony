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
    private $projet_id;

/**
 *@ORM\Column(type="integer")
 */
private $projet_categorie_id;

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
private $is_visible;

    /**
     * Sets the value of project_id.
     *
     * @param mixed $project_id the project id
     *
     * @return self
     */
    private function setProjectId($project_id)
    {
        $this->project_id = $project_id;

        return $this;
    }

    /**
     * Sets the value of project_categorie_id.
     *
     * @param mixed $project_categorie_id the project categorie id
     *
     * @return self
     */
    private function setProjectCategorieId($project_categorie_id)
    {
        $this->project_categorie_id = $project_categorie_id;

        return $this;
    }

    /**
     * Sets the value of titre.
     *
     * @param mixed $titre the titre
     *
     * @return self
     */
    private function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Sets the value of description.
     *
     * @param mixed $description the description
     *
     * @return self
     */
    private function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Sets the value of date_project.
     *
     * @param mixed $date_project the date project
     *
     * @return self
     */
    private function setDateProject($date_project)
    {
        $this->date_project = $date_project;

        return $this;
    }

    /**
     * Sets the value of photo.
     *
     * @param mixed $photo the photo
     *
     * @return self
     */
    private function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Sets the value of is_visible.
     *
     * @param mixed $is_visible the is visible
     *
     * @return self
     */
    private function setIsVisible($is_visible)
    {
        $this->is_visible = $is_visible;

        return $this;
    }

    /**
     * Gets the value of project_id.
     *
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Gets the value of project_categorie_id.
     *
     * @return mixed
     */
    public function getProjectCategorieId()
    {
        return $this->project_categorie_id;
    }

    /**
     * Gets the value of titre.
     *
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Gets the value of description.
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Gets the value of date_project.
     *
     * @return mixed
     */
    public function getDateProject()
    {
        return $this->date_project;
    }

    /**
     * Gets the value of photo.
     *
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Gets the value of is_visible.
     *
     * @return mixed
     */
    public function getIsVisible()
    {
        return $this->is_visible;
    }
}
