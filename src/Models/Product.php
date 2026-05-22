<?php

namespace src\Models;
use src\Models\VariantImage;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
#[ORM\Table(name: "products")]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $name;

    #[ORM\Column(type: "text")]
    private string $description;

    #[ORM\Column(type: "string", length: 255)]
    private string $category;

 #[ORM\OneToMany(targetEntity: VariantImage::class, mappedBy: "product", cascade: ["persist", "remove"])]
private Collection $variantImages;



    #[ORM\OneToMany(mappedBy: "product", targetEntity: ProductImage::class, cascade: ["persist", "remove"])]
private Collection $images;


    #[ORM\OneToMany(mappedBy: "product", targetEntity: ProductVariant::class)]
    private Collection $variants;

    public function __construct()
    {
        $this->variantImages = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->variants = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(ProductImage $image): void
    {
        $this->images->add($image);
        $image->setProduct($this);
    }

    public function getVariants(): Collection
    {
        return $this->variants;
    }
    public function addVariant(ProductVariant $variant): void
{
    if (!$this->variants->contains($variant)) {
        $this->variants->add($variant);
        $variant->setProduct($this);
    }
}

}
