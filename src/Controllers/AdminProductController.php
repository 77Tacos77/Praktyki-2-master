<?php


namespace src\Controllers;

use Doctrine\ORM\EntityManager;
use src\Models\Product;
use src\Models\ProductVariant;
use src\Models\ProductImage;
use src\Models\VariantImage;



class AdminProductController extends FrontController
{
    public function __construct(EntityManager $entityManager)
    {
        parent::__construct($entityManager);
    }

    public function index()
    {
        $products = $this->entityManager
            ->getRepository(Product::class)
            ->findAll();

        $this->smarty->assign('products', $products);
        $this->setTemplate('pages/products/index.tpl');
        return $this->render();
    }
    public function edit()
{
    $id = $_GET['id'] ?? null;
    if (!$id) die("Brak ID produktu");

    $product = $this->entityManager
        ->getRepository(Product::class)
        ->find($id);

    if (!$product) die("Produkt nie istnieje");

    // POBRANIE ZDJĘĆ WARIANTÓW
    $variantImages = $this->entityManager
        ->getRepository(VariantImage::class)
        ->findBy(['product' => $product]);

    $this->smarty->assign('product', $product);
    $this->smarty->assign('variantImages', $variantImages);

    $this->setTemplate('pages/products/edit.tpl');
    return $this->render();
}

    public function create()
    {
        $this->setTemplate('pages/products/create.tpl');
        return $this->render();
    }
    public function deleteMultiple()
    {
        if (!isset($_POST['ids']) || empty($_POST['ids'])) {
            $_SESSION['flash'] = "Nie wybrano żadnych produktów do usunięcia.";
            header("Location: /Praktyki-2-master/?page=products");
            exit;
        }

        $ids = $_POST['ids'];

        foreach ($ids as $id) {
            $product = $this->entityManager->getRepository(Product::class)->find($id);

            if ($product) {
                $this->entityManager->remove($product);
            }
        }

        $this->entityManager->flush();

        $_SESSION['flash'] = "Wybrane produkty zostały usunięte.";
        header("Location: /Praktyki-2-master/?page=products");
        exit;
    }
    public function view()
{
    $id = $_GET['id'] ?? null;

    if (!$id) {
        die("Brak ID produktu");
    }


$product = $this->entityManager->find(\src\Models\Product::class, $id);

    if (!$product) {
        die("Produkt nie istnieje");
    }

    $variantImages = $this->entityManager
        ->getRepository(\src\Models\VariantImage::class)
        ->findBy(['product' => $product]);

    $this->smarty->assign('product', $product);
    $this->smarty->assign('variantImages', $variantImages);

    $this->setTemplate('products/view.tpl');

    return $this->render();
}

    




    public function store()
    {
        $name = $_POST['name'] ?? null;
        $category = $_POST['category'] ?? null;
        $description = $_POST['description'] ?? null;
        $price = $_POST['price'] ?? null;

        if (!$name || !$category || !$description || !$price) {
            $_SESSION['flash'] = 'Wypełnij wszystkie pola!';
            header('Location: /Praktyki-2-master/?page=products/create');
            exit;
        }

        $product = new Product();
        $product->setName($name);
        $product->setCategory($category);
        $product->setDescription($description);

        // --- WARIANT ---
        $variant = new ProductVariant();
        $variant->setVariantName("Domyślny");
        $variant->setPrice((float)$price);
        $variant->setEan13("0000000000000");
        $variant->setProduct($product);

        $product->addVariant($variant);
        $this->entityManager->persist($variant);

        // --- PRODUKT ---
        $this->entityManager->persist($product);

        // --- ZDJĘCIE ---
        if (!empty($_FILES['image']['name'])) {

            $fileName = time() . '_' . $_FILES['image']['name'];
            $uploadPath = __DIR__ . '/../../uploads/' . $fileName; // POPRAWIONE

            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {

                $image = new ProductImage();
                $image->setAlt($fileName);
                $image->setProduct($product);

                $product->addImage($image);
                $this->entityManager->persist($image);
            }
        }
        $this->entityManager->flush();

        $_SESSION['flash'] = 'Produkt został dodany!';
        header('Location: /Praktyki-2-master/?page=products');
        exit;
    }
    public function update()
{
    $id = $_GET['id'] ?? null;
    if (!$id) die("Brak ID produktu");

    $product = $this->entityManager
        ->getRepository(Product::class)
        ->find($id);

    if (!$product) die("Produkt nie istnieje");

    $name = $_POST['name'] ?? null;
    $category = $_POST['category'] ?? null;
    $description = $_POST['description'] ?? null;
    $price = $_POST['price'] ?? null;

    $product->setName($name);
    $product->setCategory($category);
    $product->setDescription($description);

    // --- WARIANT ---
    $variant = $product->getVariants()->first();
    if ($variant) {
        $variant->setPrice((float)$price);
    }

    // --- ZDJĘCIE ---
    if (!empty($_FILES['image']['name'])) {

        $fileName = time() . '_' . $_FILES['image']['name'];
        $uploadPath = __DIR__ . '/../../uploads/' . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {

            // usuń stare zdjęcie
            $oldImage = $product->getImages()->first();
            if ($oldImage) {
                $this->entityManager->remove($oldImage);
            }

            // dodaj nowe zdjęcie
            $image = new ProductImage();
            $image->setAlt($fileName);
            $image->setProduct($product);

            $product->addImage($image);
            $this->entityManager->persist($image);
        }
    }

    $this->entityManager->flush();

    $_SESSION['flash'] = 'Produkt został zaktualizowany!';
    header('Location: /Praktyki-2-master/?page=products');
    exit;
}
public function addVariantImage()
{
    $productId = $_GET['id'] ?? null;
    if (!$productId) die("Brak ID produktu");

    $product = $this->entityManager->find(Product::class, $productId);
    if (!$product) die("Produkt nie istnieje");

    $color = $_POST['color'] ?? null;

    if (!empty($_FILES['image']['name']) && $color) {

        $fileName = uniqid() . "_" . $_FILES['image']['name'];
        $uploadPath = __DIR__ . '/../../uploads/' . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {

            $variantImage = new VariantImage();
            $variantImage->setProduct($product);
            $variantImage->setColor($color);
            $variantImage->setImage($fileName);

            $this->entityManager->persist($variantImage);
            $this->entityManager->flush();
        }
    }

    header("Location: /Praktyki-2-master/?page=products/edit&id=" . $productId);
    exit;
}



}