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
     * @ORM\Column(type="string", length=45)
     */
    private $Site_path;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Text;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Organigrame", inversedBy="siteTexts")
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
}
