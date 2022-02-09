<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtteremNyelv
 *
 * @ORM\Table(name="etterem_nyelv")
 * @ORM\Entity
 */
class EtteremNyelv
{
    /**
     * @var string
     *
     * @ORM\Column(name="kod", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kod;

    /**
     * @var int
     *
     * @ORM\Column(name="etterem_id", type="integer", nullable=false)
     */
    private $etteremId;

    /**
     * @var string
     *
     * @ORM\Column(name="nyelv", type="string", length=45, nullable=false)
     */
    private $nyelv;

    public function getKod(): ?string
    {
        return $this->kod;
    }

    public function getEtteremId(): ?int
    {
        return $this->etteremId;
    }

    public function setEtteremId(int $etteremId): self
    {
        $this->etteremId = $etteremId;

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


}
