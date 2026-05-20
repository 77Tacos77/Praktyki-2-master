<?php

namespace src\Models;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "productvariant")]
class ProductVariant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\ManyToOne(targetEntity: Product::class)]
    #[ORM\JoinColumn(name: "product_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private Product $product;

    #[ORM\Column(name: "variant_name", type: "string", length: 255)] private string $variantName;

    #[ORM\Column(type: "decimal", precision: 10, scale: 2)]
    private float $price;

    #[ORM\Column(type: "string", length: 13)]
    private string $ean13;

    public function getId(): int
    {
        return $this->id;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    public function getVariantName(): string
    {
        return $this->variantName;
    }
    public function setVariantName(string $name): void
    {
        $this->variantName = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getEan13(): string
    {
        return $this->ean13;
    }
    public function setEan13(string $ean): void
    {
        $this->ean13 = $ean;
    }
}
