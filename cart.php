<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['cart'][] = $_POST['product_id'];
}
require 'config.php';
$items = array_map(function($id) use ($db) {
    return $db->query("SELECT * FROM products WHERE id = $id")->fetch();
}, $_SESSION['cart']);
?>
<h1>Your Cart</h1>
<?php foreach($items as $item): ?>
    <p><?= $item['name'] ?> - $<?= $item['price'] ?></p>
<?php endforeach; ?>
