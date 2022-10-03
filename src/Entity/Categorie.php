<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $ref = null;

    #[ORM\Column(length: 100)]
    private ?string $titre_ref = null;

    public function getRef(): ?int
    {
        return $this->ref;
    }

    public function getTitreRef(): ?string
    {
        return $this->titre_ref;
    }

    public function setTitreRef(string $titre_ref): self
    {
        $this->titre_ref = $titre_ref;

        return $this;
    }

}
