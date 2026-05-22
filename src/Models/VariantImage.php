<?php

namespace src\Models;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "variant_images")]
class VariantImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: "variantImages")]
    #[ORM\JoinColumn(name: "product_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private Product $product;

    #[ORM\Column(type: "string", length: 50)]
    private string $color;

    #[ORM\Column(type: "string", length: 255)]
    private string $image;

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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}
