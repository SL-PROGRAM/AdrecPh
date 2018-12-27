<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string", length=45)
     */
    private $Site_path;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $path;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSitePath(): ?string
    {
        return $this->Site_path;
    }

    public function setSitePath(string $Site_path): self
    {
        $this->Site_path = $Site_path;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
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
}
