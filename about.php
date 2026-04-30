<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Замовлення товару</title>
</head>
<body>

<h2>Форма замовлення</h2>

<form method="post">
    <label>Ім’я:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Товар:</label><br>
    <select name="product">
        <option value="phone">Телефон (10000 грн)</option>
        <option value="laptop">Ноутбук (25000 грн)</option>
        <option value="tablet">Планшет (15000 грн)</option>
    </select><br><br>

    <label>Кількість:</label><br>
    <input type="number" name="quantity" min="1" max="100" required><br><br>

    <button type="submit">Замовити</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Очищення даних
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $product = $_POST["product"];
    $quantity = filter_var($_POST["quantity"], FILTER_VALIDATE_INT);

    // Масив товарів і цін
    $products = [
        "phone" => ["name" => "Телефон", "price" => 10000],
        "laptop" => ["name" => "Ноутбук", "price" => 25000],
        "tablet" => ["name" => "Планшет", "price" => 15000]
    ];

    // Перевірки
    if (empty($name)) {
        echo "<p style='color:red;'>Введіть ім’я.</p>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>Некоректний email.</p>";
    }
    elseif (!isset($products[$product])) {
        echo "<p style='color:red;'>Невірний товар.</p>";
    }
    elseif ($quantity === false || $quantity < 1 || $quantity > 100) {
        echo "<p style='color:red;'>Кількість має бути від 1 до 100.</p>";
    }
    else {
        // Розрахунок суми
        $total = $products[$product]["price"] * $quantity;

        // Безпечний вивід
        echo "<h3>Підсумок замовлення:</h3>";
        echo "<p>Ім’я: " . htmlspecialchars($name) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Товар: " . htmlspecialchars($products[$product]["name"]) . "</p>";
        echo "<p>Кількість: " . $quantity . "</p>";
        echo "<p>Сума: " . $total . " грн</p>";
    }
}
?>

</body>
</html>