<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CityZip
 *
 * @ORM\Table(name="city_zip", indexes={@ORM\Index(name="cit_zip", columns={"cit_zip"})})
 * @ORM\Entity
 */
class CityZip
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
     * @var string|null
     *
     * @ORM\Column(name="cit_zip", type="string", length=8, nullable=true)
     */
    private $citZip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cit_name", type="string", length=64, nullable=true)
     */
    private $citName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cit_cty_code", type="string", length=2, nullable=true)
     */
    private $citCtyCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cit_lat", type="float", precision=9, scale=3, nullable=true)
     */
    private $citLat;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cit_long", type="float", precision=9, scale=3, nullable=true)
     */
    private $citLong;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cit_cso_code", type="integer", nullable=true)
     */
    private $citCsoCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cit_rig_id", type="integer", nullable=true)
     */
    private $citRigId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cit_range", type="float", precision=9, scale=3, nullable=true)
     */
    private $citRange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cit_population", type="integer", nullable=true)
     */
    private $citPopulation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cit_homes", type="integer", nullable=true)
     */
    private $citHomes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCitZip(): ?string
    {
        return $this->citZip;
    }

    public function setCitZip(?string $citZip): self
    {
        $this->citZip = $citZip;

        return $this;
    }

    public function getCitName(): ?string
    {
        return $this->citName;
    }

    public function setCitName(?string $citName): self
    {
        $this->citName = $citName;

        return $this;
    }

    public function getCitCtyCode(): ?string
    {
        return $this->citCtyCode;
    }

    public function setCitCtyCode(?string $citCtyCode): self
    {
        $this->citCtyCode = $citCtyCode;

        return $this;
    }

    public function getCitLat(): ?float
    {
        return $this->citLat;
    }

    public function setCitLat(?float $citLat): self
    {
        $this->citLat = $citLat;

        return $this;
    }

    public function getCitLong(): ?float
    {
        return $this->citLong;
    }

    public function setCitLong(?float $citLong): self
    {
        $this->citLong = $citLong;

        return $this;
    }

    public function getCitCsoCode(): ?int
    {
        return $this->citCsoCode;
    }

    public function setCitCsoCode(?int $citCsoCode): self
    {
        $this->citCsoCode = $citCsoCode;

        return $this;
    }

    public function getCitRigId(): ?int
    {
        return $this->citRigId;
    }

    public function setCitRigId(?int $citRigId): self
    {
        $this->citRigId = $citRigId;

        return $this;
    }

    public function getCitRange(): ?float
    {
        return $this->citRange;
    }

    public function setCitRange(?float $citRange): self
    {
        $this->citRange = $citRange;

        return $this;
    }

    public function getCitPopulation(): ?int
    {
        return $this->citPopulation;
    }

    public function setCitPopulation(?int $citPopulation): self
    {
        $this->citPopulation = $citPopulation;

        return $this;
    }

    public function getCitHomes(): ?int
    {
        return $this->citHomes;
    }

    public function setCitHomes(?int $citHomes): self
    {
        $this->citHomes = $citHomes;

        return $this;
    }


}
