<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kategoriak
 *
 * @ORM\Table(name="kategoriak")
 * @ORM\Entity
 */
class Kategoriak
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="kategoria", type="string", length=255, nullable=false)
     */
    private $kategoria;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }

    public function setKategoria(string $kategoria): self
    {
        $this->kategoria = $kategoria;

        return $this;
    }


}
