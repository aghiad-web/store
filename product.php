<?php include 'includes/header.php'; ?>
<?php
    require 'config.php';
    $id = $_GET['id'];
    $product = $db->query("SELECT * FROM products WHERE id = $id")->fetch();
?>
<div class="product-detail">
    <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
    <h2><?= $product['name'] ?></h2>
    <p><?= $product['description'] ?></p>
    <p><strong>Price: $<?= number_format($product['price'], 2) ?></strong></p>
    <button class="add-to-cart" data-product-id="<?= $product['id'] ?>">Add to Cart</button>
</div>
<?php include 'includes/footer.php'; ?>
