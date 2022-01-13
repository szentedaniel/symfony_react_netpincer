<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtteremKonyhatipusRend
 *
 * @ORM\Table(name="etterem_konyhatipus_rend", indexes={@ORM\Index(name="FK_etteremKonyhatipusokRend_etteremId_ettermek", columns={"etterem_id"}), @ORM\Index(name="FK_etteremKonyhatipusRend_tipusId_konyhatipusok", columns={"tipus_id"})})
 * @ORM\Entity
 */
class EtteremKonyhatipusRend
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
     * @var \Ettermek
     *
     * @ORM\ManyToOne(targetEntity="Ettermek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etterem_id", referencedColumnName="id")
     * })
     */
    private $etterem;

    /**
     * @var \Konyhatipusok
     *
     * @ORM\ManyToOne(targetEntity="Konyhatipusok")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipus_id", referencedColumnName="id")
     * })
     */
    private $tipus;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTipus(): ?Konyhatipusok
    {
        return $this->tipus;
    }

    public function setTipus(?Konyhatipusok $tipus): self
    {
        $this->tipus = $tipus;

        return $this;
    }


}
