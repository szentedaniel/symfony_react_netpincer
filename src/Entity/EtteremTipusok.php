<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtteremTipusok
 *
 * @ORM\Table(name="etterem_tipusok")
 * @ORM\Entity
 */
class EtteremTipusok
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
     * @ORM\Column(name="tipus", type="string", length=255, nullable=false)
     */
    private $tipus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipus(): ?string
    {
        return $this->tipus;
    }

    public function setTipus(string $tipus): self
    {
        $this->tipus = $tipus;

        return $this;
    }


}