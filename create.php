<?php
include 'config.php';

// Adiciona produto
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product']) && isset($_POST['category_id'])) {
    $name = $_POST['product'];
    $category_id = $_POST['category_id'];
    $stmt = $pdo->prepare("INSERT INTO products (name, category_id) VALUES (?, ?)");
    $stmt->execute([$name, $category_id]);
}

// Lista categorias e produtos
$categories = $pdo->query("SELECT * FROM categories")->fetchAll();
$products = $pdo->query("SELECT products.*, categories.name as category_name FROM products JOIN categories ON products.category_id = categories.id")->fetchAll();
?>
