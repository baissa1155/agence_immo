<?php

namespace App\Entity;

use App\Repository\ChambresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambresRepository::class)
 */
class Chambres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity=BiensImmobiliers::class, mappedBy="chambres")
     */
    private $biensimmobiliers;

    public function __construct()
    {
        $this->biensimmobiliers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return Collection|BiensImmobiliers[]
     */
    public function getBiensimmobiliers(): Collection
    {
        return $this->biensimmobiliers;
    }

    public function addBiensimmobilier(BiensImmobiliers $biensimmobilier): self
    {
        if (!$this->biensimmobiliers->contains($biensimmobilier)) {
            $this->biensimmobiliers[] = $biensimmobilier;
            $biensimmobilier->setChambres($this);
        }

        return $this;
    }

    public function removeBiensimmobilier(BiensImmobiliers $biensimmobilier): self
    {
        if ($this->biensimmobiliers->removeElement($biensimmobilier)) {
            // set the owning side to null (unless already changed)
            if ($biensimmobilier->getChambres() === $this) {
                $biensimmobilier->setChambres(null);
            }
        }

        return $this;
    }
}
