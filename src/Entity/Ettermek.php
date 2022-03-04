<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ettermek
 *
 * @ORM\Table(name="ettermek", indexes={@ORM\Index(name="FK_ettermek_cityId_cityZip", columns={"city_id"})})
 * @ORM\Entity
 */
class Ettermek
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
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=155, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adoszam", type="string", length=13, nullable=false)
     */
    private $adoszam;

    /**
     * @var float|null
     *
     * @ORM\Column(name="lang", type="float", precision=10, scale=0, nullable=true)
     */
    private $lang;

    /**
     * @var float|null
     *
     * @ORM\Column(name="long", type="float", precision=10, scale=0, nullable=true)
     */
    private $long;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefon", type="string", length=45, nullable=true)
     */
    private $telefon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var array|null
     *
     * @ORM\Column(name="nyitvatartas", type="json", nullable=true)
     */
    private $nyitvatartas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weblap", type="string", length=255, nullable=true)
     */
    private $weblap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="img_path", type="string", length=255, nullable=true)
     */
    private $imgPath;

    /**
     * @var string|null
     *
     * @ORM\Column(name="img_bg_path", type="string", length=255, nullable=true)
     */
    private $imgBgPath;

    /**
     * @var \CityZip
     *
     * @ORM\ManyToOne(targetEntity="CityZip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Kategoriak", inversedBy="etterem")
     * @ORM\JoinTable(name="etterem_kategoria_rend",
     *   joinColumns={
     *     @ORM\JoinColumn(name="etterem_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="kategoria_id", referencedColumnName="id")
     *   }
     * )
     */
    private $kategoria;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Konyhatipusok", mappedBy="etterem")
     */
    private $konyhaTipus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EtteremTipusok", inversedBy="etterem")
     * @ORM\JoinTable(name="etterem_tipus_rend",
     *   joinColumns={
     *     @ORM\JoinColumn(name="etterem_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tipus_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tipus;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->kategoria = new \Doctrine\Common\Collections\ArrayCollection();
        $this->konyhaTipus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tipus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAdoszam(): ?string
    {
        return $this->adoszam;
    }

    public function setAdoszam(string $adoszam): self
    {
        $this->adoszam = $adoszam;

        return $this;
    }

    public function getLang(): ?float
    {
        return $this->lang;
    }

    public function setLang(?float $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getLong(): ?float
    {
        return $this->long;
    }

    public function setLong(?float $long): self
    {
        $this->long = $long;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->telefon;
    }

    public function setTelefon(?string $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNyitvatartas(): ?array
    {
        return $this->nyitvatartas;
    }

    public function setNyitvatartas(?array $nyitvatartas): self
    {
        $this->nyitvatartas = $nyitvatartas;

        return $this;
    }

    public function getWeblap(): ?string
    {
        return $this->weblap;
    }

    public function setWeblap(?string $weblap): self
    {
        $this->weblap = $weblap;

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

    public function getImgBgPath(): ?string
    {
        return $this->imgBgPath;
    }

    public function setImgBgPath(?string $imgBgPath): self
    {
        $this->imgBgPath = $imgBgPath;

        return $this;
    }

    public function getCity(): ?CityZip
    {
        return $this->city;
    }

    public function setCity(?CityZip $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Collection|Kategoriak[]
     */
    public function getKategoria(): Collection
    {
        return $this->kategoria;
    }

    public function addKategorium(Kategoriak $kategorium): self
    {
        if (!$this->kategoria->contains($kategorium)) {
            $this->kategoria[] = $kategorium;
        }

        return $this;
    }

    public function removeKategorium(Kategoriak $kategorium): self
    {
        $this->kategoria->removeElement($kategorium);

        return $this;
    }

    /**
     * @return Collection|Konyhatipusok[]
     */
    public function getKonyhaTipus(): Collection
    {
        return $this->konyhaTipus;
    }

    public function addKonyhaTipu(Konyhatipusok $konyhaTipu): self
    {
        if (!$this->konyhaTipus->contains($konyhaTipu)) {
            $this->konyhaTipus[] = $konyhaTipu;
            $konyhaTipu->addEtterem($this);
        }

        return $this;
    }

    public function removeKonyhaTipu(Konyhatipusok $konyhaTipu): self
    {
        if ($this->konyhaTipus->removeElement($konyhaTipu)) {
            $konyhaTipu->removeEtterem($this);
        }

        return $this;
    }

    /**
     * @return Collection|EtteremTipusok[]
     */
    public function getTipus(): Collection
    {
        return $this->tipus;
    }

    public function addTipu(EtteremTipusok $tipu): self
    {
        if (!$this->tipus->contains($tipu)) {
            $this->tipus[] = $tipu;
        }

        return $this;
    }

    public function removeTipu(EtteremTipusok $tipu): self
    {
        $this->tipus->removeElement($tipu);

        return $this;
    }

}
