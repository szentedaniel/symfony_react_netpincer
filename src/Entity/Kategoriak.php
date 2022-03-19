<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Kategoriak
 *
 * @ORM\Table(name="kategoriak", indexes={@ORM\Index(name="asd_idx", columns={"parent_id"})})
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

    /**
     * @var \Kategoriak
     *
     * @ORM\ManyToOne(targetEntity="Kategoriak")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ettermek", mappedBy="kategoria")
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

    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }

    public function setKategoria(string $kategoria): self
    {
        $this->kategoria = $kategoria;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

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
            $etterem->addKategorium($this);
        }

        return $this;
    }

    public function removeEtterem(Ettermek $etterem): self
    {
        if ($this->etterem->removeElement($etterem)) {
            $etterem->removeKategorium($this);
        }

        return $this;
    }

}
