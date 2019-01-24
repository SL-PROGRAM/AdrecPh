<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SiteTextRepository")
 */
class SiteText
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="text")
     */
    private $Text;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Organigrame", inversedBy="siteTexts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $organigrame;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Titre;


    public function __toString() {
        return $this->getTitre();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(string $Text): self
    {
        $this->Text = $Text;

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
}
