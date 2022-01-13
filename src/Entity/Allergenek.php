<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allergenek
 *
 * @ORM\Table(name="allergenek")
 * @ORM\Entity
 */
class Allergenek
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
     * @ORM\Column(name="neve", type="string", length=255, nullable=false)
     */
    private $neve;

    /**
     * @var int
     *
     * @ORM\Column(name="kod", type="integer", nullable=false)
     */
    private $kod;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNeve(): ?string
    {
        return $this->neve;
    }

    public function setNeve(string $neve): self
    {
        $this->neve = $neve;

        return $this;
    }

    public function getKod(): ?int
    {
        return $this->kod;
    }

    public function setKod(int $kod): self
    {
        $this->kod = $kod;

        return $this;
    }


}
