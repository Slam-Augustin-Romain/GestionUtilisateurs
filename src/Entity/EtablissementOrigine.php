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
    private $nomm_etablissement_origine;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNommEtablissementOrigine(): ?string
    {
        return $this->nomm_etablissement_origine;
    }

    public function setNommEtablissementOrigine(?string $nomm_etablissement_origine): self
    {
        $this->nomm_etablissement_origine = $nomm_etablissement_origine;

        return $this;
    }
}
