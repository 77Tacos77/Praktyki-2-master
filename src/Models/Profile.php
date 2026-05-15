<?php
namespace src\Models;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'profile')]
class Profile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $imie = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $nazwisko = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $ulica = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $kod_pocztowy = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $miasto = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $kraj = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $numer_telefonu = null;

    #[ORM\OneToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private User $user;

    public function getId(): int
    {
        return $this->id;
    }

    public function getImie(): ?string
    {
        return $this->imie;
    }

    public function setImie(?string $imie): self
    {
        $this->imie = $imie;
        return $this;
    }

    public function getNazwisko(): ?string
    {
        return $this->nazwisko;
    }

    public function setNazwisko(?string $nazwisko): self
    {
        $this->nazwisko = $nazwisko;
        return $this;
    }

    public function getUlica(): ?string
    {
        return $this->ulica;
    }

    public function setUlica(?string $ulica): self
    {
        $this->ulica = $ulica;
        return $this;
    }

    public function getKodPocztowy(): ?string
    {
        return $this->kod_pocztowy;
    }

    public function setKodPocztowy(?string $kod): self
    {
        $this->kod_pocztowy = $kod;
        return $this;
    }

    public function getMiasto(): ?string
    {
        return $this->miasto;
    }

    public function setMiasto(?string $miasto): self
    {
        $this->miasto = $miasto;
        return $this;
    }

    public function getKraj(): ?string
    {
        return $this->kraj;
    }

    public function setKraj(?string $kraj): self
    {
        $this->kraj = $kraj;
        return $this;
    }

    public function getNumerTelefonu(): ?string
    {
        return $this->numer_telefonu;
    }

    public function setNumerTelefonu(?string $tel): self
    {
        $this->numer_telefonu = $tel;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }
    public function __construct(User $user)
{
    $this->user = $user;
}

public function setUser(User $user): self
{
    $this->user = $user;
    return $this;
}

}
?>