<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TermekekAllergenekRend
 *
 * @ORM\Table(name="termekek_allergenek_rend", indexes={@ORM\Index(name="FK_allergenekRend_termekId_termekek", columns={"termek_id"}), @ORM\Index(name="FK_termekekAllergenekRend_allergenId_allergenek", columns={"allergen_id"})})
 * @ORM\Entity
 */
class TermekekAllergenekRend
{

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
     * @var \Allergenek
     *
     * @ORM\ManyToOne(targetEntity="Allergenek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allergen_id", referencedColumnName="id")
     * })
     */
    private $allergen;


    public function getTermek(): ?Termekek
    {
        return $this->termek;
    }

    public function setTermek(?Termekek $termek): self
    {
        $this->termek = $termek;

        return $this;
    }

    public function getAllergen(): ?Allergenek
    {
        return $this->allergen;
    }

    public function setAllergen(?Allergenek $allergen): self
    {
        $this->allergen = $allergen;

        return $this;
    }


}
