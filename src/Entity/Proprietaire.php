<?php

namespace App\Entity;

use App\Repository\ProprietaireRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Time;

/**
 * @ORM\Entity(repositoryClass=ProprietaireRepository::class)
 */
class Proprietaire
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
    private $nom_proprietaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rue_et_numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_prive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_travail;

    /**
     * @ORM\Column(type="datetime")
     */
    private $heure_presence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $types_de_biens;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo_du_proprietaire;

    public function __construct()
    {
        $this->heure_presence = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProprietaire(): ?string
    {
        return $this->nom_proprietaire;
    }

    public function setNomProprietaire(string $nom_proprietaire): self
    {
        $this->nom_proprietaire = $nom_proprietaire;

        return $this;
    }

    public function getRueEtNumero(): ?string
    {
        return $this->rue_et_numero;
    }

    public function setRueEtNumero(string $rue_et_numero): self
    {
        $this->rue_et_numero = $rue_et_numero;

        return $this;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getNumeroPrive(): ?string
    {
        return $this->numero_prive;
    }

    public function setNumeroPrive(string $numero_prive): self
    {
        $this->numero_prive = $numero_prive;

        return $this;
    }

    public function getNumeroTravail(): ?string
    {
        return $this->numero_travail;
    }

    public function setNumeroTravail(string $numero_travail): self
    {
        $this->numero_travail = $numero_travail;

        return $this;
    }

    public function getHeurePresence(): ?\DateTimeInterface
    {
        return $this->heure_presence;
    }

    public function setHeurePresence(\DateTimeInterface $heure_presence): self
    {
        $this->heure_presence = $heure_presence;

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

    public function getPhotoDuProprietaire(): ?string
    {
        return $this->photo_du_proprietaire;
    }

    public function setPhotoDuProprietaire(string $photo_du_proprietaire): self
    {
        $this->photo_du_proprietaire = $photo_du_proprietaire;

        return $this;
    }
}
