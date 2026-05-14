<?php

namespace src\Models;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'address')]
class Address extends Model
{
    #[ORM\Column(type: 'string', length: 255)]
    private string $title;

    #[ORM\Column(type: 'string', length: 500)]
    private string $url;

    #[ORM\Column(type: 'text')]
    private string $description;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'addresses')]
    #[ORM\JoinColumn(nullable: false)]
    private User $user;

    public function __construct(
        string $title,
        string $url,
        string $description,
        User $user
    ) {
        $this->title = $title;
        $this->url = $url;
        $this->description = $description;
        $this->user = $user;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUser(): User
    {
        return $this->user;
    }
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
}
