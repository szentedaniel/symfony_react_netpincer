<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TermekekFordito
 *
 * @ORM\Table(name="termekek_fordito", indexes={@ORM\Index(name="FK_312", columns={"termek_id"})})
 * @ORM\Entity
 */
class TermekekFordito
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
     * @ORM\Column(name="nyelv_kod", type="string", length=2, nullable=false)
     */
    private $nyelvKod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="termek_nev", type="string", length=45, nullable=true)
     */
    private $termekNev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="termek_leiras", type="string", length=255, nullable=true)
     */
    private $termekLeiras;

    /**
     * @var \Termekek
     *
     * @ORM\ManyToOne(targetEntity="Termekek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="termek_id", referencedColumnName="id")
     * })
     */
    private $termek;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNyelvKod(): ?string
    {
        return $this->nyelvKod;
    }

    public function setNyelvKod(string $nyelvKod): self
    {
        $this->nyelvKod = $nyelvKod;

        return $this;
    }

    public function getTermekNev(): ?string
    {
        return $this->termekNev;
    }

    public function setTermekNev(?string $termekNev): self
    {
        $this->termekNev = $termekNev;

        return $this;
    }

    public function getTermekLeiras(): ?string
    {
        return $this->termekLeiras;
    }

    public function setTermekLeiras(?string $termekLeiras): self
    {
        $this->termekLeiras = $termekLeiras;

        return $this;
    }

    public function getTermek(): ?Termekek
    {
        return $this->termek;
    }

    public function setTermek(?Termekek $termek): self
    {
        $this->termek = $termek;

        return $this;
    }


}
