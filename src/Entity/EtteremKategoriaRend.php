<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtteremKategoriaRend
 *
 * @ORM\Table(name="etterem_kategoria_rend", indexes={@ORM\Index(name="FK_etteremKategoriaRend_etteremId_ettermek", columns={"etterem_id"}), @ORM\Index(name="FK_etteremKategoriaRend_kategoriaId_kategoriak", columns={"kategoria_id"})})
 * @ORM\Entity
 */
class EtteremKategoriaRend
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
     * @var \Kategoriak
     *
     * @ORM\ManyToOne(targetEntity="Kategoriak")
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

    public function getKategoria(): ?Kategoriak
    {
        return $this->kategoria;
    }

    public function setKategoria(?Kategoriak $kategoria): self
    {
        $this->kategoria = $kategoria;

        return $this;
    }


}
