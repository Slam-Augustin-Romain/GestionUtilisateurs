<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecializationRepository")
 */
class Specialization
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
    private $specialization_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecializationName(): ?string
    {
        return $this->specialization_name;
    }

    public function setSpecializationName(string $specialization_name): self
    {
        $this->specialization_name = $specialization_name;

        return $this;
    }
}
