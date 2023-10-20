<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(length: 255)]
    private ?string $Author = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $PublicationDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $AdditionDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $ModificationDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): static
    {
        $this->Title = $Title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->Author;
    }

    public function setAuthor(string $Author): static
    {
        $this->Author = $Author;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->PublicationDate;
    }

    public function setPublicationDate(\DateTimeInterface $PublicationDate): static
    {
        $this->PublicationDate = $PublicationDate;

        return $this;
    }

    public function getAdditionDate(): ?\DateTimeInterface
    {
        return $this->AdditionDate;
    }

    public function setAdditionDate(\DateTimeInterface $AdditionDate): static
    {
        $this->AdditionDate = $AdditionDate;

        return $this;
    }

    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->ModificationDate;
    }

    public function setModificationDate(\DateTimeInterface $ModificationDate): static
    {
        $this->ModificationDate = $ModificationDate;

        return $this;
    }
}
