<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FE";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Получаем product_id из запроса
$product_id = isset($_POST['productId']) ? $_POST['productId'] : null;

if ($product_id !== null) {
    // Здесь предполагается, что у вас есть таблица Basket с полями ID, User_id, Count_product и Product_id
    $user_id = 1; // Замените на реальное значение User_id

    // Пример добавления товара в корзину
    $insertQuery = "INSERT INTO Basket (User_id, Count_product, Product_id) VALUES ($user_id, 1, $product_id)";
    $insertResult = $mysqli->query($insertQuery);

    if ($insertResult) {
        echo "Товар успешно добавлен в корзину";
    } else {
        echo "Ошибка при добавлении в корзину: " . $mysqli->error;
    }
} else {
    echo "Ошибка: Не передан product_id";
}

$mysqli->close();
?>