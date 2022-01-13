<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foglalasok
 *
 * @ORM\Table(name="foglalasok", indexes={@ORM\Index(name="FK_foglalasok_asztalId_asztalok", columns={"asztal_id"}), @ORM\Index(name="FK_foglalasok_etteremId_ettermek", columns={"etterem_id"}), @ORM\Index(name="FK_foglalasok_userId_user", columns={"user_id"})})
 * @ORM\Entity
 */
class Foglalasok
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
     * @var \DateTime
     *
     * @ORM\Column(name="kezdet", type="datetime", nullable=false)
     */
    private $kezdet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vege", type="datetime", nullable=false)
     */
    private $vege;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="foglalas_ideje", type="datetime", nullable=false)
     */
    private $foglalasIdeje;

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

    public function getKezdet(): ?\DateTimeInterface
    {
        return $this->kezdet;
    }

    public function setKezdet(\DateTimeInterface $kezdet): self
    {
        $this->kezdet = $kezdet;

        return $this;
    }

    public function getVege(): ?\DateTimeInterface
    {
        return $this->vege;
    }

    public function setVege(\DateTimeInterface $vege): self
    {
        $this->vege = $vege;

        return $this;
    }

    public function getFoglalasIdeje(): ?\DateTimeInterface
    {
        return $this->foglalasIdeje;
    }

    public function setFoglalasIdeje(\DateTimeInterface $foglalasIdeje): self
    {
        $this->foglalasIdeje = $foglalasIdeje;

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
