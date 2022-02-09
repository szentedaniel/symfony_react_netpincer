<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Termekek
 *
 * @ORM\Table(name="termekek", indexes={@ORM\Index(name="FK_termekek_etteremId_ettermek", columns={"etterem_id"}), @ORM\Index(name="FK_termekek_kategoriaId_kategoriak", columns={"kategoria_id"})})
 * @ORM\Entity
 */
class Termekek
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
     * @var float
     *
     * @ORM\Column(name="ar_forint", type="float", precision=10, scale=0, nullable=false)
     */
    private $arForint;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ar_euro", type="float", precision=10, scale=0, nullable=true)
     */
    private $arEuro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mennyiség", type="string", length=45, nullable=true)
     */
    private $mennyiség;

    /**
     * @var string|null
     *
     * @ORM\Column(name="img_path", type="string", length=255, nullable=true)
     */
    private $imgPath;

    /**
     * @var int
     *
     * @ORM\Column(name="elerheto", type="integer", nullable=false)
     */
    private $elerheto;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArForint(): ?float
    {
        return $this->arForint;
    }

    public function setArForint(float $arForint): self
    {
        $this->arForint = $arForint;

        return $this;
    }

    public function getArEuro(): ?float
    {
        return $this->arEuro;
    }

    public function setArEuro(?float $arEuro): self
    {
        $this->arEuro = $arEuro;

        return $this;
    }

    public function getMennyiség(): ?string
    {
        return $this->mennyiség;
    }

    public function setMennyiség(?string $mennyiség): self
    {
        $this->mennyiség = $mennyiség;

        return $this;
    }

    public function getImgPath(): ?string
    {
        return $this->imgPath;
    }

    public function setImgPath(?string $imgPath): self
    {
        $this->imgPath = $imgPath;

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
