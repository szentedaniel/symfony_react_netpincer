<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtteremTipusRend
 *
 * @ORM\Table(name="etterem_tipus_rend", indexes={@ORM\Index(name="FK_EtteremKatRend_etteremId_ettermek", columns={"etterem_id"}), @ORM\Index(name="FK_EtteremKatRend_kategoriaId_kategoriak", columns={"kategoria_id"})})
 * @ORM\Entity
 */
class EtteremTipusRend
{

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
     * @var \EtteremTipusok
     *
     * @ORM\ManyToOne(targetEntity="EtteremTipusok")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="kategoria_id", referencedColumnName="id")
     * })
     */
    private $kategoria;


    public function getEtterem(): ?Ettermek
    {
        return $this->etterem;
    }

    public function setEtterem(?Ettermek $etterem): self
    {
        $this->etterem = $etterem;

        return $this;
    }

    public function getKategoria(): ?EtteremTipusok
    {
        return $this->kategoria;
    }

    public function setKategoria(?EtteremTipusok $kategoria): self
    {
        $this->kategoria = $kategoria;

        return $this;
    }


}
