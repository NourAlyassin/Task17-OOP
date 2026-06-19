<?php

class Product
{
    public $name;

    public $price;

    public $brand;

    public $image;

    public $description;

    public $tax;

    public function getName()
    {
        return "Product Name: " . $this->name;
    }

    public function priceAfterDiscount($discount)
    {
        $discountAmount = $this->price * $discount;
        $PAD = $this->price - $discountAmount;
        return "Price After Discount: " . $PAD;
    }

    public function getFinalPrice()
    {
        $taxAmount = $this->price * $this->tax;
        $finalPrice = $this->price + $taxAmount;
        return "<strong>Final Price:</strong> $" . $finalPrice;
    }

    public function getInfo()
    {
        return "Product Name: " . $this->name . "<br>" .
            "Product Price: " . $this->price . "<br>" .
            "Product Brand: " . $this->brand . "<br>" .
            "Product Image: " . $this->image . "<br>" .
            "Product Description: " . $this->description . "<br>" .
            "Product Tax: " . $this->tax . "<br>";
    }
}

$product1 = new Product();
$product1->name = "Mobile iPhone 14 Pro Max";
$product1->price = 1200;
$product1->brand = "Apple";
$product1->image = "images\iphone14promax.jpeg";
$product1->description = "iPhone 14 Pro Max — 6.7 display, Dynamic Island, 48MP main camera, always-on display, crash detection, and satellite SOS.";
$product1->tax = 0.2;
// echo $product1->getName() . "<br>";
// echo $product1->priceAfterDiscount(0.3) . "<br>";
// echo $product1->getFinalPrice() . "<br><br>";
// echo "Product Info: <br>" . $product1->getInfo() . "<br>";

echo "<br><br><br>";

$product2 = new Product();
$product2->name = "MacBook Air (M5)";
$product2->price = 1000;
$product2->brand = "Apple";
$product2->image = "images\macbookairm5.jpeg";
$product2->description = "MacBook Air (M5) — 13.6-inch Liquid Retina display, Apple M5 chip, 8GB unified memory, 256GB SSD.";
$product2->tax = 0.2;
// echo $product2->getName() . "<br>";
// echo $product2->priceAfterDiscount(0.5) . "<br>";
// echo $product2->getFinalPrice() . "<br><br>";
// echo "Product Info: <br>" . $product2->getInfo() . "<br>";

echo "<br><br><br>";

$product3 = new Product();
$product3->name = "Samsung Galaxy S23 Ultra";
$product3->price = 1500;
$product3->brand = "Samsung";
$product3->image = "images\samsunggalaxys23ultra.jpeg";
$product3->description = "Samsung Galaxy S23 Ultra — 6.8-inch Dynamic AMOLED 2X display, Snapdragon 8 Gen 2 for Galaxy, 12GB RAM, 512GB storage.";
$product3->tax = 0.2;
// echo $product3->getName() . "<br>";
// echo $product3->priceAfterDiscount(0.2) . "<br>";
// echo $product3->getFinalPrice() . "<br><br>";
// echo "Product Info: <br>" . $product3->getInfo() . "<br>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="row">

            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">

                    <img src="<?= $product1->image ?>" class="card-img-top" alt="Product Image">

                    <div class="card-body">

                        <h5 class="card-title">
                            <?= $product1->getName(); ?>
                        </h5>

                        <p class="card-text">
                            <?= $product1->description; ?>
                        </p>

                        <p>
                            <strong>Brand:</strong>
                            <?= $product1->brand; ?>
                        </p>

                        <p>
                            <strong>Price:</strong>
                            $<?= $product1->price; ?>
                        </p>

                        <p>
                            <?= $product1->getFinalPrice(); ?>
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="container mt-5">

        <div class="row">

            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">

                    <img src="<?= $product2->image ?>" class="card-img-top" alt="Product Image">

                    <div class="card-body">

                        <h5 class="card-title">
                            <?= $product2->getName(); ?>
                        </h5>

                        <p class="card-text">
                            <?= $product2->description; ?>
                        </p>

                        <p>
                            <strong>Brand:</strong>
                            <?= $product2->brand; ?>
                        </p>

                        <p>
                            <strong>Price:</strong>
                            $<?= $product2->price; ?>
                        </p>

                        <p>
                            <?= $product2->getFinalPrice(); ?>
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="container mt-5">

        <div class="row">

            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">

                    <img src="<?= $product3->image ?>" class="card-img-top" alt="Product Image">

                    <div class="card-body">

                        <h5 class="card-title">
                            <?= $product3->getName(); ?>
                        </h5>

                        <p class="card-text">
                            <?= $product3->description; ?>
                        </p>

                        <p>
                            <strong>Brand:</strong>
                            <?= $product3->brand; ?>
                        </p>

                        <p>
                            <strong>Price:</strong>
                            $<?= $product3->price; ?>
                        </p>

                        <p>
                            <?= $product3->getFinalPrice(); ?>
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>

</body>

</html>