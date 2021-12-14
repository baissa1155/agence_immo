<?php

namespace App\Entity;

use App\Repository\TypesLogementsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypesLogementsRepository::class)
 */
class TypesLogements
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
    private $nomType;

    /**
     * @ORM\OneToMany(targetEntity=BiensImmobiliers::class, mappedBy="typesLogements")
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

    public function getNomType(): ?string
    {
        return $this->nomType;
    }

    public function setNomType(string $nomType): self
    {
        $this->nomType = $nomType;

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
            $biensimmobilier->setTypesLogements($this);
        }

        return $this;
    }

    public function removeBiensimmobilier(BiensImmobiliers $biensimmobilier): self
    {
        if ($this->biensimmobiliers->removeElement($biensimmobilier)) {
            // set the owning side to null (unless already changed)
            if ($biensimmobilier->getTypesLogements() === $this) {
                $biensimmobilier->setTypesLogements(null);
            }
        }

        return $this;
    }
}
