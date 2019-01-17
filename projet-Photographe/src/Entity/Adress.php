<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdressRepository")
 */
class Adress
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $Nom;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $Prenom;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $Tel;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Number;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $adress_1;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $adress_2;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $CP;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $City;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="adresses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    public function __toString() {
        return $this->getNom();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->Number;
    }

    public function setNumber(?int $Number): self
    {
        $this->Number = $Number;

        return $this;
    }

    public function getAdress1(): ?string
    {
        return $this->adress_1;
    }

    public function setAdress1(string $adress_1): self
    {
        $this->adress_1 = $adress_1;

        return $this;
    }

    public function getAdress2(): ?string
    {
        return $this->adress_2;
    }

    public function setAdress2(?string $adress_2): self
    {
        $this->adress_2 = $adress_2;

        return $this;
    }

    public function getCP(): ?string
    {
        return $this->CP;
    }

    public function setCP(string $CP): self
    {
        $this->CP = $CP;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): self
    {
        $this->City = $City;

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

    public function getTel(): ?string
    {
        return $this->Tel;
    }

    public function setTel(?string $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

}
