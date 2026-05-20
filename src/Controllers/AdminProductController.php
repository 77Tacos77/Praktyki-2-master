<?php

namespace src\Controllers;

use src\Models\Product;
use src\Models\ProductImage;
use src\Models\ProductVariant;
use Doctrine\ORM\EntityManager;

class AdminProductController extends FrontController
{
    protected EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        parent::__construct($entityManager);

        $this->entityManager = $entityManager;
    }

    // LISTA PRODUKTÓW
    public function index(): string
    {
        $products = $this->entityManager
            ->getRepository(Product::class)
            ->findAll();

        $this->smarty->assign('products', $products);

        $this->setTemplate('pages/products/index.tpl');

        return $this->render();
    }

    // FORMULARZ DODAWANIA
    public function create(): string
    {
$this->setTemplate('pages/products/create.tpl');
        return $this->render();
    }

    // ZAPIS PRODUKTU
    public function store(): string
    {
        $name = $_POST['name'] ?? '';
        $category = $_POST['category'] ?? '';
        $description = $_POST['description'] ?? '';
        $price = $_POST['price'] ?? 0;

        $product = new Product();

        $product->setName($name);
        $product->setCategory($category);
        $product->setDescription($description);

        $this->entityManager->persist($product);

        if (!empty($_FILES['image']['name'])) {

            $image = $_FILES['image'];

            $imageName = time() . '_' . $image['name'];

            $uploadPath = __DIR__ . '/../../uploads/' . $imageName;

            move_uploaded_file(
                $image['tmp_name'],
                $uploadPath
            );

            $imageEntity = new ProductImage();

            $imageEntity->setProduct($product);
            $imageEntity->setAlt($imageName);

            $this->entityManager->persist($imageEntity);
        }
        

        $variant = new ProductVariant();

        $variant->setProduct($product);
        $variant->setVariantName('Domyślny wariant');
        $variant->setPrice($price);
        $variant->setEan13('0000000000000');

        $this->entityManager->persist($variant);

        $this->entityManager->flush();

        header('Location: /Praktyki-2-master/?page=products');

        exit();
    }
    public function deleteMultiple()
{
    $ids = $_POST['ids'] ?? [];

    if (empty($ids)) {
        return 'Nie wybrano żadnych produktów';
    }

    foreach ($ids as $id) {
        $product = $this->entityManager->getRepository(Product::class)->find($id);
        if ($product) {
            $this->entityManager->remove($product);
        }
    }

    $this->entityManager->flush();

    header('Location: /Praktyki-2-master/?page=products');
    exit;
}

}
