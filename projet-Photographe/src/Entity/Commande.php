<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Statut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LienPhotoImage", mappedBy="commande", orphanRemoval=true, cascade={"persist"})
     */
    private $lienPhotoImages;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    public function __construct()
    {
        $this->lienPhotoImages = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?int
    {
        return $this->Statut;
    }

    public function setStatut(int $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

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
            $lienPhotoImage->setCommande($this);
        }

        return $this;
    }

    public function removeLienPhotoImage(LienPhotoImage $lienPhotoImage): self
    {
        if ($this->lienPhotoImages->contains($lienPhotoImage)) {
            $this->lienPhotoImages->removeElement($lienPhotoImage);
            // set the owning side to null (unless already changed)
            if ($lienPhotoImage->getCommande() === $this) {
                $lienPhotoImage->setCommande(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
