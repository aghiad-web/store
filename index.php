<?php include 'includes/header.php'; ?>
<?php
    require 'config.php';
    $products = $db->query("SELECT * FROM products")->fetchAll();
?>
<h1>Welcome to Tech Store</h1>
<div class="products">
    <?php foreach($products as $product): ?>
        <div class="product">
            <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
            <h2><?= $product['name'] ?></h2>
            <p>$<?= number_format($product['price'], 2) ?></p>
            <button class="add-to-cart" data-product-id="<?= $product['id'] ?>">Add to Cart</button>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'includes/footer.php'; ?>
