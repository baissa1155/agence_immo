<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
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
    private $userName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $creatAt;

    /**
     * @ORM\ManyToOne(targetEntity=BiensImmobiliers::class, inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $biensimmobiliers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getCreatAt(): ?\DateTimeImmutable
    {
        return $this->creatAt;
    }

    public function setCreatAt(\DateTimeImmutable $creatAt): self
    {
        $this->creatAt = $creatAt;

        return $this;
    }

    public function getBiensimmobiliers(): ?BiensImmobiliers
    {
        return $this->biensimmobiliers;
    }

    public function setBiensimmobiliers(?BiensImmobiliers $biensimmobiliers): self
    {
        $this->biensimmobiliers = $biensimmobiliers;

        return $this;
    }
}
