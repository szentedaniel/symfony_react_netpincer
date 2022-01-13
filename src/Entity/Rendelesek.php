<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendelesek
 *
 * @ORM\Table(name="rendelesek", indexes={@ORM\Index(name="FK_rendelesek_asztalId_asztalok", columns={"asztal_id"}), @ORM\Index(name="FK_rendelesek_etteremId_ettermek", columns={"etterem_id"}), @ORM\Index(name="FK_rendelesek_statuszId_rendelesStatusz", columns={"statusz_id"}), @ORM\Index(name="FK_rendelesek_termekId_termekek", columns={"termek_id"}), @ORM\Index(name="FK_rendelesek_userId_user", columns={"user_id"})})
 * @ORM\Entity
 */
class Rendelesek
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
     * @ORM\Column(name="mennyiseg", type="integer", nullable=false)
     */
    private $mennyiseg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rendeles_ideje", type="datetime", nullable=false)
     */
    private $rendelesIdeje;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kupon", type="string", length=45, nullable=true)
     */
    private $kupon;

    /**
     * @var int
     *
     * @ORM\Column(name="rendeles_id", type="integer", nullable=false)
     */
    private $rendelesId;

    /**
     * @var \Asztalok
     *
     * @ORM\ManyToOne(targetEntity="Asztalok")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asztal_id", referencedColumnName="id")
     * })
     */
    private $asztal;

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
     * @var \RendelesStatusz
     *
     * @ORM\ManyToOne(targetEntity="RendelesStatusz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statusz_id", referencedColumnName="id")
     * })
     */
    private $statusz;

    /**
     * @var \Termekek
     *
     * @ORM\ManyToOne(targetEntity="Termekek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="termek_id", referencedColumnName="id")
     * })
     */
    private $termek;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMennyiseg(): ?int
    {
        return $this->mennyiseg;
    }

    public function setMennyiseg(int $mennyiseg): self
    {
        $this->mennyiseg = $mennyiseg;

        return $this;
    }

    public function getRendelesIdeje(): ?\DateTimeInterface
    {
        return $this->rendelesIdeje;
    }

    public function setRendelesIdeje(\DateTimeInterface $rendelesIdeje): self
    {
        $this->rendelesIdeje = $rendelesIdeje;

        return $this;
    }

    public function getKupon(): ?string
    {
        return $this->kupon;
    }

    public function setKupon(?string $kupon): self
    {
        $this->kupon = $kupon;

        return $this;
    }

    public function getRendelesId(): ?int
    {
        return $this->rendelesId;
    }

    public function setRendelesId(int $rendelesId): self
    {
        $this->rendelesId = $rendelesId;

        return $this;
    }

    public function getAsztal(): ?Asztalok
    {
        return $this->asztal;
    }

    public function setAsztal(?Asztalok $asztal): self
    {
        $this->asztal = $asztal;

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

    public function getStatusz(): ?RendelesStatusz
    {
        return $this->statusz;
    }

    public function setStatusz(?RendelesStatusz $statusz): self
    {
        $this->statusz = $statusz;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
