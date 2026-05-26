<?php
namespace src\Models;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "order_items")]
class OrderItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column]
    private int $product_id;

    #[ORM\Column]
    private int $variant_id;

    #[ORM\Column]
    private int $quantity;

    #[ORM\Column]
    private float $price;

    #[ORM\Column]
    private int $order_id;

    public function setProductId($id) { $this->product_id = $id; }
    public function setVariantId($id) { $this->variant_id = $id; }
    public function setQuantity($q) { $this->quantity = $q; }
    public function setPrice($p) { $this->price = $p; }
    public function setOrderId($id) { $this->order_id = $id; }
}