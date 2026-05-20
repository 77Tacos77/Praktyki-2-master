<?php

namespace src\Models;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity] #[ORM\Table(name: 'productimage')] class ProductImage
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column(type: 'integer')] private ?int $id = null;
    #[ORM\Column(type: 'string')] private string $alt;
    #[ORM\ManyToOne(targetEntity: Product::class)] #[ORM\JoinColumn(nullable: false)] private Product $product;
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getAlt(): string
    {
        return $this->alt ;
    }
    public function setAlt(string $alt): self
    {
        $this->alt = $alt;
        return $this;
    }
    public function getProduct(): Product
    {
        return $this->product;
    }
    public function setProduct(Product $product): self
    {
        $this->product = $product;
        return $this;
    }
}
