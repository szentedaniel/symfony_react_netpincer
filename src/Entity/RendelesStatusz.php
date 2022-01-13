<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RendelesStatusz
 *
 * @ORM\Table(name="rendeles_statusz")
 * @ORM\Entity
 */
class RendelesStatusz
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
     * @ORM\Column(name="statusz", type="string", length=45, nullable=false)
     */
    private $statusz;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatusz(): ?string
    {
        return $this->statusz;
    }

    public function setStatusz(string $statusz): self
    {
        $this->statusz = $statusz;

        return $this;
    }


}
