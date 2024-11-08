<?php
require 'config.php';
$id = $_GET['id'];
$product = $db->query("SELECT * FROM products WHERE id = $id")->fetch();
?>
<h2><?= $product['name'] ?></h2>
<p><?= $product['description'] ?></p>
<p>$<?= $product['price'] ?></p>
<form action="cart.php" method="POST">
    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
    <button type="submit">Add to Cart</button>
</form>
