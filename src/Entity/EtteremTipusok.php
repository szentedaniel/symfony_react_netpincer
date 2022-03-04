<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ettermek", mappedBy="tipus")
     */
    private $etterem;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etterem = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    /**
     * @return Collection|Ettermek[]
     */
    public function getEtterem(): Collection
    {
        return $this->etterem;
    }

    public function addEtterem(Ettermek $etterem): self
    {
        if (!$this->etterem->contains($etterem)) {
            $this->etterem[] = $etterem;
            $etterem->addTipu($this);
        }

        return $this;
    }

    public function removeEtterem(Ettermek $etterem): self
    {
        if ($this->etterem->removeElement($etterem)) {
            $etterem->removeTipu($this);
        }

        return $this;
    }

}
