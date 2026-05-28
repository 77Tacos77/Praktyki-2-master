<?php
namespace src\Models;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "orders")]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column]
    private string $user;

    #[ORM\Column]
    private float $total;

    #[ORM\Column]
    private string $createdAt;

    public function setUser($user)
    {
        $this->user = $user;
    }
    public function setTotal($total)
    {
        $this->total = $total;
    }
    public function setCreatedAt($date)
    {
        $this->createdAt = $date;
    }

    public function getId()
    {
        return $this->id;
    }
   #[ORM\Column(name: "address_id", nullable: true)]
private ?int $addressId = null;

public function getAddressId(): ?int
{
    return $this->addressId;
}

public function setAddressId(?int $addressId): void
{
    $this->addressId = $addressId;
}
    
}
