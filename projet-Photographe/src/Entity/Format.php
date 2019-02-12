<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormatRepository")
 */
class Format
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $format;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LienPhotoImage", mappedBy="format", orphanRemoval=true)
     */
    private $lienPhotoImages;

    public function __construct()
    {
        $this->lienPhotoImages = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getFormat();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(int $format): self
    {
        $this->format = $format;

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
            $lienPhotoImage->setFormat($this);
        }

        return $this;
    }

    public function removeLienPhotoImage(LienPhotoImage $lienPhotoImage): self
    {
        if ($this->lienPhotoImages->contains($lienPhotoImage)) {
            $this->lienPhotoImages->removeElement($lienPhotoImage);
            // set the owning side to null (unless already changed)
            if ($lienPhotoImage->getFormat() === $this) {
                $lienPhotoImage->setFormat(null);
            }
        }

        return $this;
    }
}
