<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GradeRepository")
 */
class Grade
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
    private $grade_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGradeName(): ?string
    {
        return $this->grade_name;
    }

    public function setGradeName(string $grade_name): self
    {
        $this->grade_name = $grade_name;

        return $this;
    }
}
