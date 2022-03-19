<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Termekek", inversedBy="allergen")
     * @ORM\JoinTable(name="termekek_allergenek_rend",
     *   joinColumns={
     *     @ORM\JoinColumn(name="allergen_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="termek_id", referencedColumnName="id")
     *   }
     * )
     */
    private $termek;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->termek = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    /**
     * @return Collection|Termekek[]
     */
    public function getTermek(): Collection
    {
        return $this->termek;
    }

    public function addTermek(Termekek $termek): self
    {
        if (!$this->termek->contains($termek)) {
            $this->termek[] = $termek;
        }

        return $this;
    }

    public function removeTermek(Termekek $termek): self
    {
        $this->termek->removeElement($termek);

        return $this;
    }

}
