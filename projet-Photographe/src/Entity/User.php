<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;






    /**
     * @ORM\Column(type="datetime", nullable=true, options={"default" : "CURRENT_TIMESTAMP"})
     */
    protected $Date_inscription;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Adress", mappedBy="User", orphanRemoval=true)
     */
    private $adresses;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LivreDOr", mappedBy="User")
     */
    protected $livreDOrs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Galery", inversedBy="users")
     */
    protected $Galery;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="User")
     */
    protected $commandes;

    public function __construct()
    {
        parent::__construct();
        $this->adresses = new ArrayCollection();
        $this->livreDOrs = new ArrayCollection();
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }





    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->Date_inscription;
    }

    public function setDateInscription(\DateTimeInterface $Date_inscription): self
    {
        $this->Date_inscription = $Date_inscription;

        return $this;
    }

    /**
     * @return Collection|Adress[]
     */
    public function getAdress(): Collection
    {
        return $this->adresses;
    }

    public function addAdress(Adress $adress): self
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses[] = $adress;
            $adress->setUser($this);
        }

        return $this;
    }

    public function removeAdress(Adress $adress): self
    {
        if ($this->adresses->contains($adress)) {
            $this->adresses->removeElement($adress);
            // set the owning side to null (unless already changed)
            if ($adress->getUser() === $this) {
                $adress->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LivreDOr[]
     */
    public function getLivreDOrs(): Collection
    {
        return $this->livreDOrs;
    }

    public function addLivreDOr(LivreDOr $livreDOr): self
    {
        if (!$this->livreDOrs->contains($livreDOr)) {
            $this->livreDOrs[] = $livreDOr;
            $livreDOr->setUser($this);
        }

        return $this;
    }

    public function removeLivreDOr(LivreDOr $livreDOr): self
    {
        if ($this->livreDOrs->contains($livreDOr)) {
            $this->livreDOrs->removeElement($livreDOr);
            // set the owning side to null (unless already changed)
            if ($livreDOr->getUser() === $this) {
                $livreDOr->setUser(null);
            }
        }

        return $this;
    }

    public function getGalery(): ?Galery
    {
        return $this->Galery;
    }

    public function setGalery(?Galery $Galery): self
    {
        $this->Galery = $Galery;

        return $this;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setUser($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getUser() === $this) {
                $commande->setUser(null);
            }
        }

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */


}
