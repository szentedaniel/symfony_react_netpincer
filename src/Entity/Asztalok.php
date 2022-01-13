<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asztalok
 *
 * @ORM\Table(name="asztalok", indexes={@ORM\Index(name="FK_asztalok_etteremId_ettermek", columns={"etterem_id"})})
 * @ORM\Entity
 */
class Asztalok
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
     * @var int
     *
     * @ORM\Column(name="ferohely", type="integer", nullable=false)
     */
    private $ferohely;

    /**
     * @var int
     *
     * @ORM\Column(name="elerheto", type="integer", nullable=false, options={"default"="1"})
     */
    private $elerheto = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="kod", type="string", length=45, nullable=false)
     */
    private $kod;

    /**
     * @var \Ettermek
     *
     * @ORM\ManyToOne(targetEntity="Ettermek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etterem_id", referencedColumnName="id")
     * })
     */
    private $etterem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFerohely(): ?int
    {
        return $this->ferohely;
    }

    public function setFerohely(int $ferohely): self
    {
        $this->ferohely = $ferohely;

        return $this;
    }

    public function getElerheto(): ?int
    {
        return $this->elerheto;
    }

    public function setElerheto(int $elerheto): self
    {
        $this->elerheto = $elerheto;

        return $this;
    }

    public function getKod(): ?string
    {
        return $this->kod;
    }

    public function setKod(string $kod): self
    {
        $this->kod = $kod;

        return $this;
    }

    public function getEtterem(): ?Ettermek
    {
        return $this->etterem;
    }

    public function setEtterem(?Ettermek $etterem): self
    {
        $this->etterem = $etterem;

        return $this;
    }


}
