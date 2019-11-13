<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnswerRepository")
 */
class Answer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $answer_text;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $value_from;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $value_till;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnswerText(): ?string
    {
        return $this->answer_text;
    }

    public function setAnswerText(?string $answer_text): self
    {
        $this->answer_text = $answer_text;

        return $this;
    }

    public function getValueFrom(): ?int
    {
        return $this->value_from;
    }

    public function setValueFrom(?int $value_from): self
    {
        $this->value_from = $value_from;

        return $this;
    }

    public function getValueTill(): ?int
    {
        return $this->value_till;
    }

    public function setValueTill(?int $value_till): self
    {
        $this->value_till = $value_till;

        return $this;
    }
}
