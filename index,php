<?php
require 'config.php';
$products = $db->query("SELECT * FROM products")->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Welcome to the Tech Store</h1>
    <div class="products">
        <?php foreach($products as $product): ?>
            <div class="product">
                <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                <h2><?= $product['name'] ?></h2>
                <p>$<?= $product['price'] ?></p>
                <a href="product.php?id=<?= $product['id'] ?>">View Product</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
