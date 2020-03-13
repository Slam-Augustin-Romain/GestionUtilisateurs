<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtablissementOrigineRepository")
 */
class EtablissementOrigine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_etablissement_origine;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNommEtablissementOrigine(): ?string
    {
        return $this->nom_etablissement_origine;
    }

    public function setNommEtablissementOrigine(?string $nom_etablissement_origine): self
    {
        $this->nom_etablissement_origine = $nom_etablissement_origine;

        return $this;
    }
}
