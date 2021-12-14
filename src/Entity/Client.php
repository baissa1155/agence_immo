<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_client;

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
    private $numero_de_telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $types_de_biens;

    public function getIdClient(): ?int
    {
        return $this->id_client;
    }

    public function getNomClient(): ?string
    {
        return $this->nom_client;
    }

    public function setNomClient(string $nom_client): self
    {
        $this->nom_client = $nom_client;

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

    public function getNumeroDeTelephone(): ?string
    {
        return $this->numero_de_telephone;
    }

    public function setNumeroDeTelephone(string $numero_de_telephone): self
    {
        $this->numero_de_telephone = $numero_de_telephone;

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
}
