<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 * 
 */
//@ApiResource(attributes={"filters"={"movie.search_filter"}})
class Movie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var \Datatime
     * @ORM\Column(type="date")
     */
    private $release_date;

    /*
     * @var Object
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="movies")
     
    private $category;
    */

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getReleaseDate()
    {
        return $this->release_date;
    }

    public function setReleaseDate($release_date)
    {
        $this->release_date = $release_date;

        return $this;
    }

    // public function getCategory()
    // {
    //     return $this->category;
    // }

    // public function setCategory($category)
    // {
    //     $this->category = $category;

    //     return $this;
    // }
}
