<?php

namespace App\Entity;

use App\Repository\ClasseDesBiensRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClasseDesBiensRepository::class)
 */
class ClasseDesBiens
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_de_classe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $types_de_biens;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mode_offre;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_max;

    /**
     * @ORM\Column(type="integer")
     */
    private $superficie;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_chambres;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDeClasse(): ?int
    {
        return $this->code_de_classe;
    }

    public function setCodeDeClasse(int $code_de_classe): self
    {
        $this->code_de_classe = $code_de_classe;

        return $this;
    }

    public function getTypesDeBiens(): ?string
    {
        return $this->types_de_biens;
    }

    public function setTypesDeBiens(string $types_de_biens): self
    {
        $this->types_de_biens = $types_de_biens;

        return $this;
    }

    public function getModeOffre(): ?string
    {
        return $this->mode_offre;
    }

    public function setModeOffre(string $mode_offre): self
    {
        $this->mode_offre = $mode_offre;

        return $this;
    }

    public function getPrixMax(): ?int
    {
        return $this->prix_max;
    }

    public function setPrixMax(int $prix_max): self
    {
        $this->prix_max = $prix_max;

        return $this;
    }

    public function getSuperficie(): ?int
    {
        return $this->superficie;
    }

    public function setSuperficie(int $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getNbrChambres(): ?int
    {
        return $this->nbr_chambres;
    }

    public function setNbrChambres(int $nbr_chambres): self
    {
        $this->nbr_chambres = $nbr_chambres;

        return $this;
    }
}
