<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="Movies", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="genre_id", columns={"genre_id"})})
 * @ORM\Entity
 */
class Movie
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
     * @ORM\Column(name="image_path", type="string", length=100, nullable=false)
     */
    private $imagePath;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="overview", type="text", length=65535, nullable=false)
     */
    private $overview;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_date", type="date", nullable=false)
     */
    private $releaseDate;

    /**
     * @var int
     *
     * @ORM\Column(name="in_existence", type="integer", nullable=false)
     */
    private $inExistence;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Genre", inversedBy="movies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="genre_id", referencedColumnName="id")
     * })
     */
    private $genre;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="movies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): self
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getOverview(): ?string
    {
        return $this->overview;
    }

    public function setOverview(string $overview): self
    {
        $this->overview = $overview;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getInExistence(): ?int
    {
        return $this->inExistence;
    }

    public function setInExistence(int $inExistence): self
    {
        $this->inExistence = $inExistence;

        return $this;
    }

    public function getGenre(): ?Genres
    {
        return $this->genre;
    }

    public function setGenre(?Genres $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }


}
