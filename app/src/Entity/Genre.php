<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Genre
 *
 * @ORM\Table(name="Genres")
 * @ORM\Entity
 */
class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="genre_movie", type="string", length=30, nullable=false)
     */
    private $genreMovie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Movie", mappedBy="genre")
     */
    private $movies;

    public function __construct() {
        $this->movies = new ArrayCollection();
    }

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenreMovie(): ?string
    {
        return $this->genreMovie;
    }

    public function setGenreMovie(string $genreMovie): self
    {
        $this->genreMovie = $genreMovie;

        return $this;
    }

    /**
     * @return Collection|Movies[]
    */
    public function getMovies(): Collection {
        return $this->movies;
    }

}
