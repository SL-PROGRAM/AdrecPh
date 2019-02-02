<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SitePhotoRepository")

 */
class SitePhoto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Photo", inversedBy="sitePhotos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Organigrame", inversedBy="sitePhotos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $organigrame;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Titre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $hook;

    public function __toString() {
        return $this->getTitre();
    }


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function setPhoto(?Photo $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getOrganigrame(): ?Organigrame
    {
        return $this->organigrame;
    }

    public function setOrganigrame(?Organigrame $organigrame): self
    {
        $this->organigrame = $organigrame;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getHook(): ?int
    {
        return $this->hook;
    }

    public function setHook(?int $hook): self
    {
        $this->hook = $hook;

        return $this;
    }
}
