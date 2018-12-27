<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PhotoRepository")
 */
class Photo
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
    private $Path;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LienPhotoImage", mappedBy="photo", orphanRemoval=true)
     */
    private $lienPhotoImages;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Galery", inversedBy="photos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $galery;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SitePhoto", mappedBy="photo", orphanRemoval=true)
     */
    private $sitePhotos;

    public function __construct()
    {
        $this->lienPhotoImages = new ArrayCollection();
        $this->sitePhotos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->Path;
    }

    public function setPath(string $Path): self
    {
        $this->Path = $Path;

        return $this;
    }

    /**
     * @return Collection|LienPhotoImage[]
     */
    public function getLienPhotoImages(): Collection
    {
        return $this->lienPhotoImages;
    }

    public function addLienPhotoImage(LienPhotoImage $lienPhotoImage): self
    {
        if (!$this->lienPhotoImages->contains($lienPhotoImage)) {
            $this->lienPhotoImages[] = $lienPhotoImage;
            $lienPhotoImage->setPhoto($this);
        }

        return $this;
    }

    public function removeLienPhotoImage(LienPhotoImage $lienPhotoImage): self
    {
        if ($this->lienPhotoImages->contains($lienPhotoImage)) {
            $this->lienPhotoImages->removeElement($lienPhotoImage);
            // set the owning side to null (unless already changed)
            if ($lienPhotoImage->getPhoto() === $this) {
                $lienPhotoImage->setPhoto(null);
            }
        }

        return $this;
    }

    public function getGalery(): ?Galery
    {
        return $this->galery;
    }

    public function setGalery(?Galery $galery): self
    {
        $this->galery = $galery;

        return $this;
    }

    /**
     * @return Collection|SitePhoto[]
     */
    public function getSitePhotos(): Collection
    {
        return $this->sitePhotos;
    }

    public function addSitePhoto(SitePhoto $sitePhoto): self
    {
        if (!$this->sitePhotos->contains($sitePhoto)) {
            $this->sitePhotos[] = $sitePhoto;
            $sitePhoto->setPhoto($this);
        }

        return $this;
    }

    public function removeSitePhoto(SitePhoto $sitePhoto): self
    {
        if ($this->sitePhotos->contains($sitePhoto)) {
            $this->sitePhotos->removeElement($sitePhoto);
            // set the owning side to null (unless already changed)
            if ($sitePhoto->getPhoto() === $this) {
                $sitePhoto->setPhoto(null);
            }
        }

        return $this;
    }
}
