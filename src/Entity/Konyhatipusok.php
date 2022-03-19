<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Konyhatipusok
 *
 * @ORM\Table(name="konyhatipusok")
 * @ORM\Entity
 */
class Konyhatipusok
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
     * @ORM\Column(name="tipus", type="string", length=45, nullable=false)
     */
    private $tipus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ettermek", inversedBy="konyhaTipus")
     * @ORM\JoinTable(name="etterem_konyhatipus_rend",
     *   joinColumns={
     *     @ORM\JoinColumn(name="konyha_tipus_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="etterem_id", referencedColumnName="id")
     *   }
     * )
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
        }

        return $this;
    }

    public function removeEtterem(Ettermek $etterem): self
    {
        $this->etterem->removeElement($etterem);

        return $this;
    }

}
