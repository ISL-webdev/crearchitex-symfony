<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $login;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * @ORM\Column(type="string")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string")
     */
    private $photo;

    /**
     * @ORM\Column(type="integer")
     */
    private $access_level;

    /**
     * @ORM\Column(type="integer")
     */
    private $is_visible;

    /**
     * @ORM\Column(type="string")
     */
    private $function;

    /**
     * @ORM\Column(type="string")
     */
    private $diplome;

    /**
     * Sets the value of id.
     *
     * @param int $id the id
     *
     * @return self
     */
    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Sets the value of login.
     *
     * @param mixed $login the login
     *
     * @return self
     */
    private function _setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    private function _setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Sets the value of nom.
     *
     * @param mixed $nom the nom
     *
     * @return self
     */
    private function _setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Sets the value of prenom.
     *
     * @param mixed $prenom the prenom
     *
     * @return self
     */
    private function _setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Sets the value of photo.
     *
     * @param mixed $photo the photo
     *
     * @return self
     */
    private function _setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Sets the value of access_level.
     *
     * @param mixed $access_level the access level
     *
     * @return self
     */
    private function _setAccessLevel($access_level)
    {
        $this->access_level = $access_level;

        return $this;
    }

    /**
     * Sets the value of is_visible.
     *
     * @param mixed $is_visible the is visible
     *
     * @return self
     */
    private function _setIsVisible($is_visible)
    {
        $this->is_visible = $is_visible;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of login.
     *
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Gets the value of nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Gets the value of prenom.
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
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
     * Gets the value of access_level.
     *
     * @return mixed
     */
    public function getAccessLevel()
    {
        return $this->access_level;
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

    /**
     * Gets the value of diplome.
     *
     * @return mixed
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Sets the value of diplome.
     *
     * @param mixed $diplome the diplome
     *
     * @return self
     */
    private function _setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Gets the value of function.
     *
     * @return mixed
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets the value of function.
     *
     * @param mixed $function the function
     *
     * @return self
     */
    private function _setFunction($function)
    {
        $this->function = $function;

        return $this;
    }
}
