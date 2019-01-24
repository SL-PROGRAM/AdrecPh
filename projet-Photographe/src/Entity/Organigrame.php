<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrganigrameRepository")
 */
class Organigrame
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
    private $page_label;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $site_path;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SitePhoto", mappedBy="organigrame", orphanRemoval=true)
     */
    private $sitePhotos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SiteText", mappedBy="organigrame", orphanRemoval=true)
     */
    private $siteTexts;

    public function __toString() {
        return $this->getPageLabel();
    }

    public function __construct()
    {
        $this->sitePhotos = new ArrayCollection();
        $this->siteTexts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPageLabel(): ?string
    {
        return $this->page_label;
    }

    public function setPageLabel(string $page_label): self
    {
        $this->page_label = $page_label;

        return $this;
    }

    public function getSitePath(): ?string
    {
        return $this->site_path;
    }

    public function setSitePath(string $site_path): self
    {
        $this->site_path = $site_path;

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
            $sitePhoto->setOrganigrame($this);
        }

        return $this;
    }

    public function removeSitePhoto(SitePhoto $sitePhoto): self
    {
        if ($this->sitePhotos->contains($sitePhoto)) {
            $this->sitePhotos->removeElement($sitePhoto);
            // set the owning side to null (unless already changed)
            if ($sitePhoto->getOrganigrame() === $this) {
                $sitePhoto->setOrganigrame(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SiteText[]
     */
    public function getSiteTexts(): Collection
    {
        return $this->siteTexts;
    }

    public function addSiteText(SiteText $siteText): self
    {
        if (!$this->siteTexts->contains($siteText)) {
            $this->siteTexts[] = $siteText;
            $siteText->setOrganigrame($this);
        }

        return $this;
    }

    public function removeSiteText(SiteText $siteText): self
    {
        if ($this->siteTexts->contains($siteText)) {
            $this->siteTexts->removeElement($siteText);
            // set the owning side to null (unless already changed)
            if ($siteText->getOrganigrame() === $this) {
                $siteText->setOrganigrame(null);
            }
        }

        return $this;
    }
}
