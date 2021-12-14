<?php

namespace App\Entity;

use App\Repository\BiensImmobiliersRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BiensImmobiliersRepository::class)
 */
class BiensImmobiliers
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
    private $statut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_soumis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rue_et_numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localite;

    /**
     * @ORM\Column(type="integer")
     */
    private $revenue_cadestral;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $types_de_biens;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo_du_bien;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=TypesLogements::class, inversedBy="biensimmobiliers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typesLogements;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="biensimmobiliers", orphanRemoval=true)
     */
    private $commentaires;

    /**
     * @ORM\ManyToOne(targetEntity=Quartier::class, inversedBy="biensquartiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quartier;

    /**
     * @ORM\ManyToOne(targetEntity=Chambres::class, inversedBy="biensimmobiliers")
     */
    private $chambres;


    public function __construct()
    {
        $this->date_soumis = new \DateTime();
        $this->commentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDateSoumis(): ?\DateTimeInterface
    {
        return $this->date_soumis;
    }

    public function setDateSoumis(\DateTimeInterface $date_soumis): self
    {
        $this->date_soumis = $date_soumis;

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

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): self
    {
        $this->code_postal = $code_postal;

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

    public function getRevenueCadestral(): ?int
    {
        return $this->revenue_cadestral;
    }

    public function setRevenueCadestral(int $revenue_cadestral): self
    {
        $this->revenue_cadestral = $revenue_cadestral;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

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

    public function getPhotoDuBien(): ?string
    {
        return $this->photo_du_bien;
    }

    public function setPhotoDuBien(string $photo_du_bien): self
    {
        $this->photo_du_bien = $photo_du_bien;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTypesLogements(): ?TypesLogements
    {
        return $this->typesLogements;
    }

    public function setTypesLogements(?TypesLogements $typesLogements): self
    {
        $this->typesLogements = $typesLogements;

        return $this;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setBiensimmobiliers($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getBiensimmobiliers() === $this) {
                $commentaire->setBiensimmobiliers(null);
            }
        }

        return $this;
    }

    public function getQuartier(): ?Quartier
    {
        return $this->quartier;
    }

    public function setQuartier(?Quartier $quartier): self
    {
        $this->quartier = $quartier;

        return $this;
    }

    public function getChambres(): ?Chambres
    {
        return $this->chambres;
    }

    public function setChambres(?Chambres $chambres): self
    {
        $this->chambres = $chambres;

        return $this;
    }
}
