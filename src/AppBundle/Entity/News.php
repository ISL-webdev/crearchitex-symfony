<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class News
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="news")
 */
class News {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $news_id;
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
    private $date_news;
    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $is_visible;

    /**
     * @return mixed
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDateNews() {
        return $this->date_news;
    }

    /**
     * @param mixed $date_news
     */
    public function setDateNews($date_news) {
        $this->date_news = $date_news;
    }

    /**
     * @return mixed
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getIsVisible() {
        return $this->is_visible;
    }

    /**
     * @param mixed $is_visible
     */
    public function setIsVisible($is_visible) {
        $this->is_visible = $is_visible;
    }

}