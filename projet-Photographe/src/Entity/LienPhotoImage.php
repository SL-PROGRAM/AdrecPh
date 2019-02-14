<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LienPhotoImageRepository")
 */
class LienPhotoImage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commande", inversedBy="lienPhotoImages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Photo", inversedBy="lienPhotoImages", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Format", inversedBy="lienPhotoImages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $format;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;

    public function __toString()
    {
        $string = $this->getId();
        return (string)$string;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

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

    public function getFormat(): ?Format
    {
        return $this->format;
    }

    public function setFormat(?Format $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
