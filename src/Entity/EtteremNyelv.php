<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtteremNyelv
 *
 * @ORM\Table(name="etterem_nyelv", indexes={@ORM\Index(name="etterem_nyelv_ettermek_id_fk", columns={"etterem_id"})})
 * @ORM\Entity
 */
class EtteremNyelv
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
     * @ORM\Column(name="kod", type="string", length=2, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="nyelv", type="string", length=45, nullable=false)
     */
    private $nyelv;

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

    public function getKod(): ?string
    {
        return $this->kod;
    }

    public function setKod(string $kod): self
    {
        $this->kod = $kod;

        return $this;
    }

    public function getNyelv(): ?string
    {
        return $this->nyelv;
    }

    public function setNyelv(string $nyelv): self
    {
        $this->nyelv = $nyelv;

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
