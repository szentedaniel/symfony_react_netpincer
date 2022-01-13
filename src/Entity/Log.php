<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Log
 *
 * @ORM\Table(name="log")
 * @ORM\Entity
 */
class Log
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
     * @ORM\Column(name="etterem_id", type="integer", nullable=false)
     */
    private $etteremId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="muvelet", type="string", length=45, nullable=false)
     */
    private $muvelet;

    /**
     * @var string
     *
     * @ORM\Column(name="Table_name", type="string", length=45, nullable=false)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="FIeld_name", type="string", length=45, nullable=false)
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="Field_value_old", type="string", length=45, nullable=false)
     */
    private $fieldValueOld;

    /**
     * @var string
     *
     * @ORM\Column(name="Field_value_new", type="string", length=45, nullable=false)
     */
    private $fieldValueNew;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getMuvelet(): ?string
    {
        return $this->muvelet;
    }

    public function setMuvelet(string $muvelet): self
    {
        $this->muvelet = $muvelet;

        return $this;
    }

    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getFieldValueOld(): ?string
    {
        return $this->fieldValueOld;
    }

    public function setFieldValueOld(string $fieldValueOld): self
    {
        $this->fieldValueOld = $fieldValueOld;

        return $this;
    }

    public function getFieldValueNew(): ?string
    {
        return $this->fieldValueNew;
    }

    public function setFieldValueNew(string $fieldValueNew): self
    {
        $this->fieldValueNew = $fieldValueNew;

        return $this;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }


}
