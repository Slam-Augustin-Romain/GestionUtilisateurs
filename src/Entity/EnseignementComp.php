<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnseignementCompRepository")
 */
class EnseignementComp
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_enseignement_comp;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Diplome", inversedBy="enseignementComps")
     */
    private $diplome;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Eleves", mappedBy="enseignementcomp")
     */
    private $eleves;

    public function __construct()
    {
        $this->eleves = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEnseignementComp(): ?string
    {
        return $this->nom_enseignement_comp;
    }

    public function setNomEnseignementComp(string $nom_enseignement_comp): self
    {
        $this->nom_enseignement_comp = $nom_enseignement_comp;

        return $this;
    }

    public function getDiplome(): ?Diplome
    {
        return $this->diplome;
    }

    public function setDiplome(?Diplome $diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * @return Collection|Eleves[]
     */
    public function getEleves(): Collection
    {
        return $this->eleves;
    }

    public function addElefe(Eleves $elefe): self
    {
        if (!$this->eleves->contains($elefe)) {
            $this->eleves[] = $elefe;
            $elefe->setEnseignementcomp($this);
        }

        return $this;
    }

    public function removeElefe(Eleves $elefe): self
    {
        if ($this->eleves->contains($elefe)) {
            $this->eleves->removeElement($elefe);
            // set the owning side to null (unless already changed)
            if ($elefe->getEnseignementcomp() === $this) {
                $elefe->setEnseignementcomp(null);
            }
        }

        return $this;
    }
}
