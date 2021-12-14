<?php

namespace App\Entity;

use App\Repository\QuartierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuartierRepository::class)
 */
class Quartier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_quartier;

    /**
     * @ORM\OneToMany(targetEntity=BiensImmobiliers::class, mappedBy="quartier")
     */
    private $biensquartiers;

    public function __construct()
    {
        $this->biensquartiers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomQuartier(): ?string
    {
        return $this->nom_quartier;
    }

    public function setNomQuartier(string $nom_quartier): self
    {
        $this->nom_quartier = $nom_quartier;

        return $this;
    }

    /**
     * @return Collection|BiensImmobiliers[]
     */
    public function getBiensquartiers(): Collection
    {
        return $this->biensquartiers;
    }

    public function addBiensquartier(BiensImmobiliers $biensquartier): self
    {
        if (!$this->biensquartiers->contains($biensquartier)) {
            $this->biensquartiers[] = $biensquartier;
            $biensquartier->setQuartier($this);
        }

        return $this;
    }

    public function removeBiensquartier(BiensImmobiliers $biensquartier): self
    {
        if ($this->biensquartiers->removeElement($biensquartier)) {
            // set the owning side to null (unless already changed)
            if ($biensquartier->getQuartier() === $this) {
                $biensquartier->setQuartier(null);
            }
        }

        return $this;
    }
}
